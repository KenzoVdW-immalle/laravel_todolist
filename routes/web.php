<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

route::get('/todolist', function(){
        $tasks = DB::table('tasks')->get();

    return view('todolist.index', compact('tasks'));
    
})->middleware('auth');

route::get('/todolist/{task}', function ($id) {
    $task = DB::table('tasks')->find($id);



    return view('todolist.show', compact('task'));
});
route::get('/taaktoevoegen', function(){

    return view('taaktoevoegen');
});

Route::get('/home', 'HomeController@index');
