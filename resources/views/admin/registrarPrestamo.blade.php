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
							      <label for="Alumno">Alumno</label>
							      <input type="text" class="form-control" placeholder="100 años de soledad" name="alumnoPrestamo">
							    </div>
							    <div class="form-group">
							      <label for="libro_id">ID Libro</label>
							      <input type="text" class="form-control" placeholder="Gabriel García Marquez" name="libro_id">
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