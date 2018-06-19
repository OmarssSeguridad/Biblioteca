<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class prestamoController extends Controller
{
    public function create()
    {
    	return view('/admin/registrarPrestamo');  

    }

    public function store(Request $request)
    {
    	$prestamo = new Prestamo;        

        $prestamo->alumno = $request->alumnoPrestamo;
        $prestamo->libro_id = $request->libro_id;
        $prestamo->admin_id = Auth::id();
        $prestamo->timestamps();

        $prestamo->save(); 

        return redirect('/admin/alta/prestamo');
    }

    public function edit($id)
    {

    }

    public function update(Request $request,$id)
    {

    }

    public function destroy($id)
    {

    }
}
