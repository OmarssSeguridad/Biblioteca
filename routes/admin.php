<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('admin')->user();

    //dd($users);

    return view('admin.home');
})->name('home');

//Registro de Alumno
Route::get('/registrarAlumno','alumnoController@create')->name('registrarAlumno');
Route::post('/registrarAlumno','alumnoController@store');

//Registro de Libro
Route::get('/registrarLibro','libroController@create')->name('registrarLibro');
Route::post('/registrarLibro','libroController@store');

//Registro de Prestamo
Route::get('/registrarPrestamo','prestamoController@create')->name('registrarPrestamo');
Route::post('/registrarPrestamo','prestamoController@store');
