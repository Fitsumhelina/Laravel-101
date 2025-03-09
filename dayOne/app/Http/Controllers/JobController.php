<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {
        return view('jobs.index', [
            'jobs' => Job::with('employer')->latest()->simplePaginate(6)
          ]);
    }
    public function create()
    {
        return view('jobs.create');
    }
    public function show(JOb $job)
    {
         return view('jobs.show', ['job' => $job]);
    }
    public function store()
    {
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
    }
    public function edit(JOb $job)
    {
        return view('jobs.update', ['job' => $job]);

    }
    public function update(JOb $job)
    {
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
    }
    public function destroy(JOb $job)
    {
        //authorize ...

        $job->delete();

        return redirect('/jobs');
    }
}
