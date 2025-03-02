<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
       'jobs' => [
        [
            'id' => 1,
            'title' => 'PHP Developer',
            'salary' => 120000,
        ],
        [
            'id' => 2,
            'title' => 'Python Developer',
            'salary' => 130000,
        ],
        [
            'id' => 3,
            'title' => 'Java Developer',
            'salary' => 140000,
        ]
       ]
    ]);
});
Route::get('/jobs/{id}', function ($id) {
    $jobs = [
        [
            'id' => 1,
            'title' => 'PHP Developer',
            'salary' => 120000,
        ],
        [
            'id' => 2,
            'title' => 'Python Developer',
            'salary' => 130000,
        ],
        [
            'id' => 3,
            'title' => 'Java Developer',
            'salary' => 140000,
        ]
    ];

    $job = Arr::first($jobs, fn($job) => $job['id'] == $id);
    dd($job);
    return view('about');

});

Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
