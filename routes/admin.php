<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('admin')->user();

    //dd($users);

    return view('admin.dashboard');
})->name('home');
  Route::get('/dashboard', 'profileController@perfilAdministrador');

  //Crear alumno
  Route::get('/alta/alumno', 'alumnoController@create');


  //Crear administrador
  Route::get('/alta/administrador', 'adminController@create');

  //Crear libro
  Route::get('/alta/libro', 'libroController@create');
  //Route::post('/alta/libro', '');

  //Prestamo
  //Route::get('/nuevoPrestamo', '');
  //Route::post('/nuevoPrestamo','');
