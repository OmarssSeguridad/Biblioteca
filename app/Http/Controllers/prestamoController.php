<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Prestamos;

// Facades
use Auth;
class prestamoController extends Controller
{
    public function create()
    {
    	return view('/admin/registrarPrestamo');  

    }

    public function store(Request $request)
    {
    	$prestamo = new Prestamos;        

        $prestamo->alumno = $request->alumnoPrestamo;
        $prestamo->libro_id = $request->libro_id;
        $prestamo->admin_id = Auth::user()->id;
        //$prestamo->timestamps();

        $prestamo->save(); 

        return redirect('/admin/nuevoPrestamo');
    }

    public function edit($id)
    {

    }

    public function update(Request $request,$id)
    {

    }

    public function destroy($id)
    {
        $item = Prestamo::find($id);
        $item->delete();
        session()->flash('message','Updated Successfully');
        return redirect('/admin/libros');
    }
}
