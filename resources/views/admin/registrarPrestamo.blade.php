@extends('admin.layout.main')
@section('content')

    <div class="content">
        <div class="row center">
	        <div class="col-md-12 center-block">
	            <div class="card">
	            	<center>
	                <div class="header">
	                    <h4 class="title">Registrar un Prestamo</h4>
	                </div>
	                <div class="content">
	                	<form action="/admin/alta/prestamo" method="post" onsubmit="return confirm('¿La información que deseas registrar es correcta?');">
                        {{ csrf_field() }}
							<fieldset>									   
							    <div class="form-group">
							      <label for="alumnoPrestamo">Alumno</label>
							      		<select name="alumnoPrestamo" id="alumnoPrestamo" class="form-control">
 											@foreach($alumnos as $alumno)
   												<option value="{{$alumno->name}}"> {{ $alumno->name}} </option>
 											@endforeach
										</select>

							    </div>
							    <div class="form-group">
							      <label for="libro_id">ID Libro</label>

							      		<select name="libro_id" id="libro_id" class="form-control">
 											@foreach($libros as $libro)
   												<option value="{{$libro->id}}"> "{{$libro->name}}" - {{$libro->autor}}  </option>
 											@endforeach
										</select>

							    </div>
								<div class="form-group">
							      <label for="admin">Admin</label>
							      <input type="number" class="form-control" disabled value="{{Auth::user()->id}}" name="adminid" >
							    </div>

							</fieldset>
						    <button type="submit" class="btn btn-primary">Guardar</button>
						</form>                           
                	</div>
                	</center>
                </div>
            </div>
        </div>
    </div>
@endsection