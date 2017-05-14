<?php

use App\task;

route::get('/todolist', 'TaskController@index');

route::get('/todolist/{task}', 'TaskController@show');

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

route::get('/taaktoevoegen', function(){

    return view('taaktoevoegen');
});

Route::get('/home', 'HomeController@index');
