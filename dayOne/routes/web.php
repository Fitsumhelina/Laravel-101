<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;


Route::get('/', function () {
   return view('home');
});
Route::get('/jobs', function () {
    return view('jobs.index', [
       'jobs' => Job::with('employer')->latest()->simplePaginate(5)
     ]);
});

Route::get(('/jobs/create'), function () {
    return view('jobs.create');
});
Route::get('/jobs/{id}', function ($id) {
    $job = Job::find($id);

    return view('jobs.show', ['job' => $job]);
});

Route::post('/jobs', function () {

    request()->validate([
        'title' => ['required', 'string', 'min:3'],
        'description' => ['required'],
        'location' => ['required'],
        'salary' => ['required','numeric'],
        'company' => ['required'],
    ]);

    Job::create([

        'title'=> request('title'),
        'description'=>request('description'),
        'location'=>request('location'),
        'salary'=>request('salary'),
        'company'=>request('company'),
        'employer_id' => 12,
        'tag_id' => 12
    ]);
    return redirect('/jobs');
});
Route::get('/contact', function () {
    return view('contact');
});
