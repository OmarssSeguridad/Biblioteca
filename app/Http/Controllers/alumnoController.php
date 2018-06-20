<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alumno;

class alumnoController extends Controller
{
    public function indexForAdmin(){
        $Usuarios = Alumno::all();
        return view('admin.usuarios',compact('Usuarios'));
    }
    public function create()
    {
        return view('/admin/registrarAlumno'); 
    }

    public function store(Request $request)
    {
        $alumno = new Alumno;        

        $alumno->name = $request->nombreAlumno;
        $alumno->sexo = $request->sexoAlumno;
        $alumno->telefono = $request->telefonoAlumno;
        $alumno->direccion = $request->direccionAlumno;
        $alumno->localidad = $request->localidadAlumno;
        $alumno->email = $request->emailAlumno;
        $alumno->password = $request->passwordAlumno;        
         $this->validate($request, [
            'email' => 'requiered|unique:alumno',
        ]);
       // $alumno->timestamps();
        $alumno->save(); 

        return redirect('/admin/alta/administrador');
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
