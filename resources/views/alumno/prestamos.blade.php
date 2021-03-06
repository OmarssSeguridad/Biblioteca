@extends('alumno.layout.main')
@section('content')
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Préstamos</h4>
                            </div>
                            
                            <div class="content table-responsive table-full-width">
                                <table class="table table-striped">
                                    <thead>
                                        <th>ID</th>
                                        <th>Alumno</th>
                                        <th>Libro</th>
                                        <th>Administrador</th>
                                    	<th>Estado</th>
                                        <th>Fecha de préstamo</th>
                                    </thead>
                                    @foreach ($prestamo as $prestamo) 
                                        <tbody>
                                            <td> {{ $prestamo->id }} </td>
                                            <td> {{ $prestamo->alumno }}</td>
                                            <td> {{ $prestamo->libro_id }} </td>
                                            <td> {{ $prestamo->admin_id }} </td>
                                            <td> {{ $prestamo->estado }} </td>
                                            <td> {{ $prestamo->created_at}} </td>
                                            <td> 
                                                <form action=""post">                          
                                                    {{csrf_field()}}
                                                    {{method_field('PUT')}}
                                                <button type="submit"><i class="fa fa-edit"></i></button> 
                                                </form>
                                            </td>

                                            <td> 
                                                <form action="" method="post">    
                                                    {{csrf_field()}}
                                                    {{ method_field('DELETE') }}

                                                <button type="submit"><i class="fa fa-trash"></i> </button> 
                                                </form> 
                                            </td>
                                        </tbody>
                                    @endforeach                              
                                    
                                </table>

                            </div>
                        </div>
                    </div>                   
                </div>
                
            </div>
            
@endsection