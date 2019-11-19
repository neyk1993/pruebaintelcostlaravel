@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h4>Bienvenido  {{ auth()->user()->name }} a la prueba de laravel  </h4></div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    El Objetivo de este Desarrollo es Demostrar la Adaptabilidad a Nuevas Tecnologias
                    <br>
                    <a href="{{action('ProductosController@index')}}" class="btn btn-primary">Agregar Producto</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
