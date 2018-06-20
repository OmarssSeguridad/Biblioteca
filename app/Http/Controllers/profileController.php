<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use App\Alumno;

use Auth;

class profileController extends Controller
{
    public function perfilAdministrador()
    {
        $admin = Admin::find(Auth::id());        
        $datos = Auth::id();
        return view('admin.dashboard',compact('admin','datos'));
    }

    public function perfilAlumno()
    {
        $alumno = Alumno::find(Auth::id());        
        $datos = Auth::id();
        return view('alumno.dashboard',compact('alumno','datos'));
    }
   

}
