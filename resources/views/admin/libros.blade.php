@extends('admin.layout.main')
@section('content')
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">libros</h4>
                            </div>
                            
                            <div class="content table-responsive table-full-width">
                                <table class="table table-striped">
                                    <thead>
                                        <th>ID</th>                                        
                                        <th>Libro</th>
                                        <th>Autor</th>
                                        <th>Año</th>
                                        <th>Edición</th>
                                        <th>Número de copias</th>
                                    </thead>
                                    @foreach ($libros as $libros) 
                                        <tbody>
                                            <td> {{ $libros->id }} </td>
                                            <td> {{ $libros->name }}</td>
                                            <td> {{ $libros->autor }} </td>
                                            <td> {{ $libros->anio }} </td>
                                            <td> {{ $libros->edicion }} </td>
                                            <td> {{ $libros->numCopias }} </td>
                                            <td> 
                                                <form action="" post="post">                          
                                                    {{csrf_field()}}
                                                    {{method_field('PUT')}}
                                                <button type="submit"><i class="fa fa-edit"></i></button> 
                                                </form>
                                            </td>

                                            <td> 
                                                <form action="{{'baja/libro/'.$libros->id}}" method="post">    
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