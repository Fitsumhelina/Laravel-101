<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

//home
Route::get('/', function () {
   return view('home');
});

//index
Route::get('/jobs', function () {
    return view('jobs.index', [
       'jobs' => Job::with('employer')->latest()->simplePaginate(6)
     ]);
});

//create
Route::get(('/jobs/create'), function () {
    return view('jobs.create');
});

//show
Route::get('/jobs/{job}', function (Job $job) {
    return view('jobs.show', ['job' => $job]);
});

//store
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
        'employer_id' => 1,
        'tag_id' => 9
    ]);
    return redirect('/jobs');
});

//edit
Route::get('/jobs/{job}/edit', function (Job $job) {
    return view('jobs.update', ['job' => $job]);
});

//update
Route::patch('/jobs/{job}', function (Job $job) {
    //authorize ...

    //validation
    request()->validate([
        'title' => ['required', 'string', 'min:3'],
        'description' => ['required'],
        'location' => ['required'],
        'salary' => ['required','numeric'],
        'company' => ['required'],
    ]);

    // update`
    $job->update([
        'title'=> request('title'),
        'description'=>request('description'),
        'location'=>request('location'),
        'salary'=>request('salary'),
        'company'=>request('company'),
        'employer_id' => 1,
        'tag_id' => 9
    ]);
    //redirect
    return redirect('/jobs/' . $job->id);
});

//delete
Route::delete('/jobs/{job}', function (Job $job) {
    //authorize ...

    $job->delete();

    return redirect('/jobs');
});

//contact
Route::get('/contact', function () {
    return view('contact');
});
