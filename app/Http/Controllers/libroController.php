<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class libroController extends Controller
{
    public function create()
    {
    	return view('/admin/registrarLibro');  
    }

    public function store(Request $request)
    {
    	$libro = new libro;        

        $libro->name = $request->nombreLibro;
        $libro->autor = $request->autorLibro;
        $libro->anio = $request->anioLibro;
        $libro->edicion = $request->edicionLibro;
        $libro->num_existencias = $request->num_existenciasLibros;
        $libro->timestamps();


        $libro->save(); 

        return redirect('/admin/home');
    }

    public function edit($id)
    {
    	$item = Libro::find($id);
        return view('admin.editLibro',compact('item'));
    }

    public function update(Request $request,$id)
    {
    	
    }

    public function destroy($id)
    {

    }}
