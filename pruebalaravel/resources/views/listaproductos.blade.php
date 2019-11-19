@extends('layouts.app')
@section('content')
    <div class="container">
    <br />
    <a href="{{action('ProductosController@create')}}" class="btn btn-primary">Agregar Producto</a>
    <br>
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
     @if (count($productos)>0)
    <table class="table table-striped">
    <thead>
      <tr>
        <th>Identificador</th>
        <th>Nombre</th>
        <th>Valor</th>
        <th>Cantidad</th>
        <th>Ultima Modificaciòn</th>
        <th colspan="2">Acciones</th>
      </tr>
    </thead>
    <tbody>
    
      @foreach($productos as $format)
      <tr>
        <td>{{$format['id']}}</td>
        <td>{{$format['nombre_producto']}}</td>
        <td>${{$format['valor']}}</td>
        <td>{{$format['cantidad']}}</td>
        <td>{{$format['updated_at']}}</td>
        
        <td><a href="{{action('ProductosController@edit', $format['id'])}}" class="btn btn-warning">Editar Producto</a></td>
        <td>
          <form action="{{action('ProductosController@destroy', $format['id'])}}" method="post">
            {{csrf_field()}}
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Eliminar Producto</button>
          </form>
        </td>
      </tr>
      @endforeach
      
      

    </tbody>
  </table>
  @else<br>
  <div class="alert alert-info" role="alert">
  <h4 class="alert-heading">Sin Productos!</h4>
  <p>No se encuentran productos </p>
  <hr>
  <p class="mb-0">Lo invitamos a agregar sus productos.</p>
</div>
  @endif
  </div>
  @endsection
  