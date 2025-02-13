<?php

use App\Models\Job;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    // $jobs = Job::with('employer')->paginate(10);
    // $jobs = Job::with('employer')->cursorPaginate(10);
    $jobs = Job::with('employer')->latest()->simplePaginate(10);

    return view('jobs.index', ['jobs' => $jobs]);
});

// Create a new Job
Route::get('/jobs/create', function () {
    return view('jobs.create ');
});

// show a job
Route::get('/jobs/{id}', function ($id) {
    $job = Job::find($id);

    return view('jobs.show', ['job' => $job]);
});

// store a job
Route::post('/jobs', function () {
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required'],
    ]);

    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => 1,
    ]);

    return redirect('/jobs');
});

// edit a job
Route::get('/jobs/{id}/edit', function ($id) {
    $job = Job::find($id);

    return view('jobs.edit', ['job' => $job]);
});

// update a job
Route::patch('/jobs/{id}', function ($id) {
    // validate
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required'],
    ]);

    // authorize

    // update the job
    $job = Job::findOrFail($id);
    $job->update([
        'title' => request('title'),
        'salary' => request('salary')
    ]);

    //redirect
    return redirect('/jobs/ ' . $job->id);
});

// delete a job
Route::delete('/jobs/{id}', function ($id) {
    // delete a job
    Job::findOrFail($id)->delete();

    // redirect
    return redirect('/jobs');
});

Route::get('/contact', function () {
    return view('contact');
});
