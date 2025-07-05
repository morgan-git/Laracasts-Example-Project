<?php

use Illuminate\Support\Facades\Route;
use App\Models\JobListing;


Route::get('/', function () {
    return view('home', [
        'greeting' => 'Hello',
        'name' => 'DICKS',
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/jobs', function () {
   //$jobs = JobListing::with('employer')->paginate(3);
    $jobs = JobListing::with('employer')->simplePaginate(3);
    //$jobs = JobListing::with('employer')->cursorPaginate(3);


    return view('jobs', [

            'jobs' => $jobs,

    ]);
});

Route::get('/jobs/{id}', function ($id) {

    if (!( $job = JobListing::find($id)) ) {
        abort(404);
    }
    return view('job', ['job' => $job]);



});
