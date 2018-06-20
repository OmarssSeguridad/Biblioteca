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
  Route::post('/alta/alumno', 'alumnoController@store');

  //Crear administrador
  Route::get('/alta/administrador', 'adminController@create');
  Route::post('/alta/administrador', 'adminController@store');

  //Crear libro
  Route::get('/alta/libro', 'libroController@create');
  Route::post('/alta/libro', 'libroController@store');

  //Crear Prestamo
  Route::get('/alta/prestamo', 'prestamoController@create');
  Route::post('/alta/prestamo','prestamoController@store');

  //Eliminar Libro
  //Route::delete('/baja/libro/{id}','libroController@destroy');
  //Eliminar Administradores
  //Route::delete('/baja/admin/{id}','adminController@destroy');
  //Eliminar Alumnos
  //Route::delete('/baja/alumno/{id}','alumnoController@destroy');

  //
  Route::get('/prestamos','prestamoController@indexAdmin');
  Route::get('/libros','libroController@indexAdmin');
  Route::get('/usuarios', 'alumnoController@indexForAdmin');

  



