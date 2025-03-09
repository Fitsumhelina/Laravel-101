<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

//home
Route::view('/', 'home');
//index
Route::get('/jobs', [JobController::class, 'index'] );

//create
Route::get(('/jobs/create'), [JobController::class, 'create'] );

//show
Route::get('/jobs/{job}', [JobController::class, 'show'] );
//store
Route::post('/jobs', [JobController::class, 'store'] );
//edit
Route::get('/jobs/{job}/edit',[JobController::class, 'edit'] );

//update
Route::patch('/jobs/{job}',[JobController::class, 'update'] );

//delete
Route::delete('/jobs/{job}', [JobController::class, 'destroy']);

//contact
Route::view('/contact', 'contact');
