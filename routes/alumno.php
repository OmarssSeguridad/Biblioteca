<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('alumno')->user();

    //dd($users);

    return view('alumno.home');
})->name('home');

//Registro de Prestamo
Route::get('/registrarPrestamo','prestamoController@create')->name('registrarPrestamo');
Route::post('/registrarPrestamo','prestamoController@store');
