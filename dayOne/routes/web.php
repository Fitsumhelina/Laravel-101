<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job_listing as Job;


Route::get('/', function () {
    return view('home', [
       'jobs' => Job::all()
     ]);
});
Route::get('/jobs/{id}', function ($id) {

    $job = Job::find($id);
    return view('job', ['job' => $job]);

});

 Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
