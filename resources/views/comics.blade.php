@extends('layout.layout')
@section('content')
@include('comiclist')
<div class="container"> <!-- change class to wrapper to get full width -->
    <div class='row'>
        <div id='right-side' class='col-md-12'>
            <div class='nav' id='comic-nav' class='col-md-12'>
                <div class='col-md-4 col-sm-12'>
                    <button class='comic-change btn btn-large' id='back-comic' title='Previous Comic'></button>
                </div>
                <div class='col-md-4 col-sm-12 col-xs-12'>
                    <button class='btn btn-large' id='comic-name' title='Show Comic List' data-toggle="modal" data-target="#comic-list"></button>
                </div>
                <div class='col-md-4 col-sm-12 col-xs-12'>
                    <button class='comic-change btn btn-large' id='next-comic' title='Next Comic'></button>
                </div>
            </div>
            <div id='warning' class='col-md-12 col-xs-12'>
                <div id='show_hide_list'>
                    <button class='show-hide btn btn-large'>Show List</button>
                </div>
                <span id='site_url'>Getting Your Page</span>
            </div>
            <div id='comic-holder' class='col-md-12'></div>
        </div>
    </div>
</div>
@endsection