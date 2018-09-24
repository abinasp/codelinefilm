<?php


Route::get('films', function (){
    return view('welcome');
});

Route::get('/', function () {
    return redirect('/films');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('saveFilm', 'AppController@saveFilmData');

Route::get('films/{slug}/{id}', 'AppController@getFilm');

Route::post('comment','AppController@newComment');