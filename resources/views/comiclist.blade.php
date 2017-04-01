<!-- Modal -->
<div class="modal fade" id="comic-list" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close pull-left" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Comic List</h4>
      </div>
      <div class="modal-body" id='comic-ul-div'>
        <ul class="nav list-group" id="comic-ul">
            @foreach($comics as $comic)
                <li><a pkid='{{ $comic->id }}' class='comic-link' href='{{ $comic->comic_url }}' category='{{ $comic->categoryid }}'>{{ str_replace('&', '&amp;', $comic->comic_name) }}</a></li>
            @endforeach
        </ul>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
