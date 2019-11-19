@extends('layouts.app')
@section('content')
<div class="container">
      <h2>Creacion de Productos</h2><br  />
      @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div><br />
      @endif
      @if (\Session::has('success'))
      <div class="alert alert-success">
          <p>{{ \Session::get('success') }}</p>
      </div><br />
      @endif
      <form method="post" action="{{url('productos')}}">
      {{csrf_field()}}
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="nombre_producto">Nombre del Producto:</label>
            <input type="text" class="form-control" name="nombre_producto">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="descripcion">Descripcion:</label>
            <textarea  class="form-control" name="descripcion"></textarea>
          </div>
        </div> 

        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="valor">Valor:</label>
            <input type="text" class="form-control" name="valor">
          </div>
        </div> 

        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="cantidad">Cantidad:</label>
            <input type="text" class="form-control" name="cantidad">
          </div>
        </div>        
        
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <button type="submit" class="btn btn-success" style="margin-left:38px">Guardar</button>
            <a href="{{action('ProductosController@index')}}" class="btn btn-danger" style="margin-left:38px">Volver</a>
          </div>
        </div>
      </form>
    </div>
    @endsection