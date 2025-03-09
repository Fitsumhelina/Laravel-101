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
       'jobs' => Job::with('employer')->latest()->simplePaginate(5)
     ]);
});

//create
Route::get(('/jobs/create'), function () {
    return view('jobs.create');
});

//show
Route::get('/jobs/{id}', function ($id) {
    $job = Job::find($id);

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
        'employer_id' => 12,
        'tag_id' => 12
    ]);
    return redirect('/jobs');
});

//edit
Route::get('/jobs/{id}/edit', function ($id) {
    $job = Job::find($id);

    return view('jobs.update', ['job' => $job]);
});

//update
Route::patch('/jobs/{id}', function ($id) {

    //validation
    request()->validate([
        'title' => ['required', 'string', 'min:3'],
        'description' => ['required'],
        'location' => ['required'],
        'salary' => ['required','numeric'],
        'company' => ['required'],
    ]);
    //authorize ...

    // update`
    $job = Job::findOrFail($id);
    $job->update([
        'title'=> request('title'),
        'description'=>request('description'),
        'location'=>request('location'),
        'salary'=>request('salary'),
        'company'=>request('company'),
        'employer_id' => 12,
        'tag_id' => 12
    ]);
    //redirect
    return redirect('/jobs/' . $job->$id);
});

//delete
Route::delete('/jobs/{id}', function ($id) {
    //authorize ...

    Job::findOrFail($id)->delete();

    return redirect('/jobs');
});

//contact
Route::get('/contact', function () {
    return view('contact');
});
