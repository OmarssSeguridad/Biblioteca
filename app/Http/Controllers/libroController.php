<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Libros;

class libroController extends Controller
{
    public function create()
    {
    	return view('/admin/registrarLibro');  
    }

    public function store(Request $request)
    {
    	$libro = new Libros;        

        $libro->name = $request->nombreLibro;
        $libro->autor = $request->autorLibro;
        $libro->anio = $request->anioLibro;
        $libro->edicion = $request->edicionLibro;
        $libro->numCopias = $request->numCopias;
       // $libro->timestamps();


        $libro->save(); 

        return redirect('/admin/alta/libro');
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
    	$item = Libro::find($id);
        $item->delete();
        session()->flash('message','Updated Successfully');
        return redirect('/admin/libros');
    }
}
