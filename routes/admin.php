<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('admin')->user();

    //dd($users);

    return view('admin.home');
})->name('home');
Route::get('/dashboard', 'profileController@perfilAdministrador');

  //Crear alumno
  Route::get('/alta/alumno', '');
  Route::post('/alta/alumno', '');

  //Crear administrador
  Route::get('/alta/administrador', '');
  Route::post('/alta/administrador', '');

  //Crear libro
  Route::get('/alta/libro', '');
  Route::post('/alta/libro', '');

