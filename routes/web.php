<?php


Route::get('/', 'ComicController@index');
Route::get('/fetchComic/{comics}', 'ComicController@fetchComic');
