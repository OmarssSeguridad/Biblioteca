<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//Rutas de Administrador
Route::group(['prefix' => 'admin'], function () {
  Route::get('/login', 'AdminAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'AdminAuth\LoginController@login');
  Route::post('/logout', 'AdminAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'AdminAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'AdminAuth\RegisterController@register');

  Route::post('/password/email', 'AdminAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'AdminAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'AdminAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'AdminAuth\ResetPasswordController@showResetForm');

  Route::delete('/baja/libro/{id}','libroController@destroy');
  Route::delete('/baja/admin/{id}','adminController@destroy');
  Route::delete('/baja/alumno/{id}','alumnoController@destroy');


});

//Rutas de Alumno
Route::group(['prefix' => 'alumno'], function () {
  Route::get('/login', 'AlumnoAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'AlumnoAuth\LoginController@login');
  Route::post('/logout', 'AlumnoAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'AlumnoAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'AlumnoAuth\RegisterController@register');

  Route::post('/password/email', 'AlumnoAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'AlumnoAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'AlumnoAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'AlumnoAuth\ResetPasswordController@showResetForm');
});

/*Contenido del templete*/
/*Route::get('dashboard', function() {
   return view('dashboard');
});*/
Route::get('icons',function(){
  return view('icons');
});
Route::get('typography', function() {
    return view('typography');
});
Route::get('notifications', function() {
    return view('notifications');
});
Route::get('template', function() {
    return view('template');
});