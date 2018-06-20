@extends('admin.layout.main')
@section('content')
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Administradores</h4>
                            </div>
                            
                            <div class="content table-responsive table-full-width">
                                <table class="table table-striped">
                                    <thead>
                                        <th>ID</th>                                        
                                        <th>Nombre</th>
                                        <th>Email</th>
                                        <th>Sexo</th>
                                        <th>Teléfono</th>
                                        <th>Dirección</th>
                                    </thead>
                                    @foreach ($Usuarios as $Usuarios) 
                                        <tbody>
                                            <td> {{ $Usuarios->id }} </td>
                                            <td> {{ $Usuarios->name }}</td>
                                            <td> {{ $Usuarios->email }} </td>
                                            @if ( $Usuarios->sexo === 0)
                                                <td>Masculino</td>
                                            @else
                                                <td>Femenino</td>
                                            @endif  
                                            <td> {{ $Usuarios->telefono }} </td>
                                            <td> {{ $Usuarios->direccion }} </td>
                                                                                         
                                            <td> 
                                                <form action="{{'baja/admin/'.$Usuarios->id}}" method="post">    
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