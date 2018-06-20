<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Prestamos;
use App\Alumno;
use App\Libros;
use Illuminate\Support\Facades\DB;


// Facades
use Auth;
class prestamoController extends Controller
{ 
    public function indexForAlumno(){
        $prestamo = DB::table('prestamos')->where('alumno',Auth::user()->name)->get();
        return view('alumno.prestamos',compact('prestamo'));
    }
    public function create()
    {
        $alumnos =  Alumno::all();
        $libros= DB::table('libros')->get();
        ;
        return view('/admin/registrarPrestamo', compact('alumnos','libros'));  

    }

    public function store(Request $request)
    {
        $prestamo = new Prestamos;        

        $prestamo->alumno = $request->alumnoPrestamo;
        $prestamo->libro_id = $request->libro_id;
        $prestamo->admin_id = Auth::user()->id;
        $prestamo->estado='P';
        //$prestamo->timestamps();
        $prestamo->save(); 


        $libro = Libros::find($prestamo->libro_id);
        $libro->numCopias=($libro->numCopias)-1;
        $libro->save();
        

        return redirect('/admin/alta/prestamo');
    }
    public function formulario()
    {

        return view('admin/alta/prestamo' ,compact('alumnos'));
    }

    public function index()
    {
        $prestamo = collect(Alumno::find(Auth::id()));
        return view('alumno.prestamos',compact('prestamo'));
    }
    public function indexAdmin()
    {
        $prestamos = DB::table('prestamos')->get();
        return view('admin.prestamos',compact('prestamos'));
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
