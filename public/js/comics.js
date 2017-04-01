$(document).ready(function(){
    Comics.init();
});
var Comics = {
    src:'',
    currentId: 0,
    currentPKID: 0,
    currentCat: 0,
    maxId: 0,
    init: function(){
        Comics.maxId = $('.comic-link').length - 1;
        $('body').keyup(Comics.keyUp);
        $('.comic-link, .show-hide, #comic-name').on('click', Comics.toggleList);
        $('.comic-change').on('click', Comics.comicChange);
        Comics.comicSource();
    },
    toggleList: function(e){
        if ($(this).hasClass('comic-link')){
            console.log('link');
            $('#comic-list').modal('hide');
            Comics.comicLink(e, this);
        }
        //$('#left-side, #right-side').toggle();
    },
    comicLink: function(e, elem){
        e.preventDefault();
        Comics.currentPKID = $(elem).attr('pkid');
        Comics.currentId = $('a[pkid='+Comics.currentPKID+']').parent().index();
        console.log(Comics.currentId);
        Comics.comicSource();
    },
    comicChange: function(e){
        e.preventDefault();
        if ($('#'+e.target.id).hasClass('disabled'))
            return;
        Comics.currentId = parseInt(Comics.currentId) + parseInt(((e.target.id == 'back-comic') ? -1 : 1));
        Comics.comicSource();
    },
    comicSource: function(){
        //Comics.src = $('#id_'+Comics.currentId).attr('href');
        //Comics.currentPKID = $('#id_'+Comics.currentId).attr('pkid');
        //Comics.currentCat = $('#id_'+Comics.currentId).attr('category');
        var comic = $('.comic-link:eq('+Comics.currentId+')');
        Comics.src = comic.attr('href');
        Comics.currentPKID = comic.attr('pkid');
        Comics.currentCat = comic.attr('category');
        Comics.loadComic();
    },
    keyUp: function(e){
        e.preventDefault();
        if (e.keyCode == 37)
            $('#back-comic').trigger('click');
        else if (e.keyCode == 39)
            $('#next-comic').trigger('click');      
    },
    setButtons: function(){
        $('#back-comic, #next-comic').removeClass('disabled');
        if (Comics.currentId == 0) 
            $('#back-comic').addClass('disabled');
        else {
            nextId = parseInt(Comics.currentId) - 1;
            if ($('.comic-link:eq('+nextId+')') != undefined){
                title = ($('.comic-link:eq('+nextId+')').html()).replace('* ', '');
                $('#back-comic').attr({title:'Previous Comic -- ' + title}).html(title);
            }
        }
        if (Comics.currentId == Comics.maxId)
            $('#next-comic').addClass('disabled');
        else {
            nextId = parseInt(Comics.currentId) + 1;
            title = ($('.comic-link:eq('+nextId+')').html()).replace('* ', '');
            $('#next-comic').attr({title:'Next Comic -- ' + title}).html(title);
        }
/*        if ($("#select-day").val() == 0) 
            $('#back-day').addClass('disabled');
        else
            $('#back-day').removeClass('disabled');

        if ($("#select-day").val() == maxDays) 
            $('#next-day').addClass('disabled');
        else
            $('#next-day').removeClass('disabled');*/
    },
    loadComic: function(){
        $('body').css('cursor', 'wait');
        Comics.setButtons();
        $('#site_url').show();
        $('#comic-holder').html("<img src='/images/fetching.png' style='min-width: 100px; min-height: 250px;'/>");
        var org_src = Comics.src;
        if (Comics.src.indexOf('arcamax') > -1) {
            Comics.curlData(Comics.src);
        } else if (Comics.src.indexOf('gocomics') > -1) { 
            //Comics.src += "/"+Comics.selectedDate.year+'/'+Comics.selectedDate.month+'/'+Comics.selectedDate.day;
            Comics.curlData();
        } else {  
            if (Comics.src.indexOf('dilbert') > -1){
                //Comics.src = "http://www.dilbert.com/";  + Comics.selectedDate.year + '-' + Comics.selectedDate.month  + '-' + Comics.selectedDate.day + '/';
                Comics.curlData(Comics.src);
            } else if (Comics.src.indexOf('retail') > -1 ) {
                //Comics.src = "http://www.retailcomic.com/comics/"; //+months[parseInt(Comics.selectedDate.month, 10)-1]+'-'+parseInt(Comics.selectedDate.day, 10)+'-'+Comics.selectedDate.year +'/';
            } else if (Comics.src.indexOf('meeh') == -1 ) {
                /*if ($('#select-day').val() > 0){
                    day = +$('#select-day').val() + 1;
                    if (Comics.src.indexOf('gocomics') > -1)
                        Comics.src += "/"+Comics.selectedDate.year+'/'+Comics.selectedDate.month+'/'+Comics.selectedDate.day +'/';
                    else if (Comics.src.indexOf('seattle') > -1)
                        Comics.src += Comics.selectedDate.year+'-'+Comics.selectedDate.month+'-'+Comics.selectedDate.day+'/';
                    else if ((Comics.src.indexOf('pajama') > -1) || (Comics.src.indexOf('retail') > -1) || (Comics.src.indexOf('deflocked') > -1))
                        Comics.src += Comics.months[Comics.selectedDate.month-1]+'-'+Comics.selectedDate.day+'-'+Comics.selectedDate.year+'/';
                }*/
            }
            document.getElementById('comic-holder').innerHTML = "<iframe id='comic-iframe' style='width:100%; height:1000px;' src='" + Comics.src+"'>";
            $('body').css('cursor', 'auto');
            $('#site_url').hide();
        }
        var comic = $('.comic-link:eq('+Comics.currentId+')');
        var comicName = comic.text().replace('* ', '');
        $('#comic-name').html(comicName);
        $('.comic-link:eq('+Comics.currentId+')').html('* '+ comicName);
        if ($('#comic_action').val() == 1){
            $('#input_comicURL').val(org_src);
            $('#input_comicName').val($('#comic-name').html());
            $('#input_categoryID').val(Comics.currentCat);
        }
    },
    curlData: function(){
           $.ajax({ 
                url: "/fetchComic/"+Comics.currentPKID,
                type: "get",
                success: Comics.fetchComicSuccess,
            }, "json");
/*        fetchData.fetch({
            url: 'curlComic.php',
            data: {src: source},
            success: Comics.fetchComicSuccess,
        });*/
    },
    fetchComicSuccess: function(data){
        if (data.success){
            if (data.url.indexOf('newspic') !== -1){
                var www = data.url.replace(/http\:\/\/www\.arcamax\.com/, '', data.url)
                $('#comic-holder').html("<img src='http://www.arcamax.com" + www + "' style='min-width: 100px; min-height: 250px;'/>");
            } else {
                $('#comic-holder').html("<img src='http://" + data.url.replace(/"/, '') + "' style='min-width: 100px; min-height: 250px;'/>");
            }
        } else {
            $('#comic-holder').html("<img src='/images/sorry.png' style='min-width: 100px; min-height: 250px;'/>");
        }
        $('body').css('cursor', 'auto');
        $('#site_url').hide();
    },
}
