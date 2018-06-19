<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('alumno')->user();

    //dd($users);

    return view('alumno.home');
})->name('home');


