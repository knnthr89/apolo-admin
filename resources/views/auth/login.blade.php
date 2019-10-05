@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-4 offset-md-4">
            <div class="card">
                <div class="card-header text-center">
                    <h1>Inicio de sesión</h1>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                    <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                            <label for="email">Email</label>
                            <input class="form-control" 
                                type="email"
                                name="email"
                                value="{{ old('email') }}"
                                placeholder="Ingresa tu email">
                            {!! $errors->first('email', '<span class="help-block">:message</span>') !!}
                        </div>
                        <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                            <label for="password">Contraseña</label>
                            <input class="form-control" 
                                type="password"
                                name="password"
                                placeholder="Ingresa tu contraseña">
                            {!! $errors->first('password', '<span class="help-block">:message</span>') !!}
                        </div>
                        <button class="btn btn-primary btn-block">Acceder</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection