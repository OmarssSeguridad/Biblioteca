@extends('admin.layout.main')
@section('content')

    <div class="content">
        <div class="row center">
	        <div class="col-md-12 center-block">
	            <div class="card">
	            	<center>
	                <div class="header">
	                    <h4 class="title">Registrar un Libro</h4>
	                </div>
	                <div class="content">
                        <form action="/admin/alta/libro" method="post" onsubmit="return confirm('¿La información que deseas registrar es correcta?');">
                        {{ csrf_field() }}
							<fieldset>									   
							    <div class="form-group">
							      <label for="nombre del libro">Nombre del Libro</label>
							      <input type="text" class="form-control" placeholder="100 años de soledad" name="nombreLibro">
							    </div>
							    <div class="form-group">
							      <label for="autorLibro">Autor</label>
							      <input type="text" class="form-control" placeholder="Gabriel García Marquez" name="autorLibro">
							    </div>
								<div class="form-group">
							      <label for="año">Año</label>
							      <input type="number" class="form-control" placeholder="1967" name="anioLibro">
							    </div>
							    <div class="form-group">
							      <label for="edicion">Edición</label>
							      <input type="text" class="form-control" placeholder="Primera edición" name="edicionLibro">
							    </div>
							    <div class="form-group">
							      <label for="año">Número de copias</label>
							      <input type="number" class="form-control" placeholder="1967" name="numCopias">
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