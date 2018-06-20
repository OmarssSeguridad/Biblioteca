@extends('admin.layout.main')
@section('content')
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Prestamos</h4>
                            </div>
                            
                            <div class="content table-responsive table-full-width">
                                <table class="table table-striped">
                                    <thead>
                                        <th>ID</th>
                                        <th>Alumno</th>
                                        <th>Libro</th>
                                        <th>Administrador</th>
                                    	<th>Estado</th>
                                    </thead>
                                    @foreach ($prestamos as $prestamos) 
                                        <tbody>
                                            <td> {{ $prestamos->id }} </td>
                                            <td> {{ $prestamos->alumno }}</td>
                                            <td> {{ $prestamos->libro_id }} </td>
                                            <td> {{ $prestamos->admin_id }} </td>
                                            <td> {{ $prestamos->estado }} </td>
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