<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => [
            [
                'title' => 'Director',
                'salary' => '$50000'
            ],
            [
                'title' => 'Programmer',
                'salary' => '$10000'
            ],
            [
                'title' => 'Teacher',
                'salary' => '$40000'
            ],
        ]
    ]);
});



Route::get('/contact', function () {
    return view('contact');
});
