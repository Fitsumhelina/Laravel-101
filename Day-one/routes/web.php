<?php

use App\Http\Controllers\TasksController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

$router -> get('/contact', function () {
    return view('contact');
});
Route::get('/greet/{name}', function ($name) {
    return view('hello' , ['name' => $name]);
}) -> where ('name','fitse');

Route::get('/int/{num?}', function ($num=21) {
    return $num;
}) -> where ('num' , '[0-9]+');

// Route::view('/', 'welcome');

// Route :: view ('task' , 'TasksController@index' );
Route::get('task', [TasksController::class, 'index']);
// Route::resource('tasks', 'TasksController');