@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-4 offset-md-4">
            <div class="card">
                <div class="card-header text-center">
                    Bienvenido: {{ auth()->user()->name }}
                </div>
                <div class="card-body text-center">
                    <strong>Email: </strong> {{ auth()->user()->email }}
                </div>
                <div class="card-footer">
                    <form method="POST" action="{{ route('logout') }}">
                        {{ csrf_field() }}
                        <button class="btn btn-danger btn-block">Cerrar sesión</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection