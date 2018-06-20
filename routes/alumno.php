<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('alumno')->user();

    //dd($users);

    return view('alumno.dashboard');
})->name('home');

  Route::get('/dashboard', 'profileController@perfilAlumno');
Route::get('/prestamos','prestamoController@index');

//Registro de Prestamo
Route::get('/registrarPrestamo','prestamoController@create')->name('registrarPrestamo');
Route::post('/registrarPrestamo','prestamoController@store');
