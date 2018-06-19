@extends('admin.layout.main')
@section('content')

<div class="content">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Registrar Administrador</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="post" action="/admin/alta/administrador" onsubmit="return confirm('¿La información que deseas registrar es correcta?');">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nombre</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="nombreAdmin" value="{{ old('name') }}" autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('sexo') ? ' has-error' : '' }}">
                            <label for="sexo" class="col-md-4 control-label">Sexo</label>

                            <div class="col-md-6">
                                <select name="sexoAdmin">
                                    <option value="0">Masculino</option>
                                    <option value="1">Femenino</option>
                                </select>

                                @if ($errors->has('sexo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('sexo') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('telefono') ? ' has-error' : '' }}">
                            <label for="teléfono" class="col-md-4 control-label">Teléfono</label>

                            <div class="col-md-6">
                                <input id="tel" type="number" class="form-control" name="telefonoAdmin" value="{{ old('telefono') }}" autofocus>

                                @if ($errors->has('telefono'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('telefono') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('direccion') ? ' has-error' : '' }}">
                            <label for="direccion" class="col-md-4 control-label">Dirección</label>

                            <div class="col-md-6">
                                <input id="tel" type="text" class="form-control" name="direccionAdmin" value="{{ old('telefono') }}" autofocus>

                                @if ($errors->has('direccion'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('direccion') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('localidad') ? ' has-error' : '' }}">
                            <label for="localidad" class="col-md-4 control-label">Localidad</label>

                            <div class="col-md-6">
                                <input id="localidad" type="text" class="form-control" name="localidadAdmin" value="{{ old('telefono') }}" autofocus>

                                @if ($errors->has('localidad'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('localidad') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="emailAdmin" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="passwordAdmin">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="col-md-4 control-label">Confirmar Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    ¡Listo!
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection