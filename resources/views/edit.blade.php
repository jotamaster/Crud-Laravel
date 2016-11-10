@extends('main.main')
@section('content')

<div class="col-md-offset-1 col-md-10 box">


<form method="POST" action="{{ url('crud/'.$product->id) }}" class="col-md-4 col-md-offset-4">
	<h1>Agregar Producto</h1>

  @if(count($errors) > 0)
    <div class="alert alert-danger" role="alert">
        <p>Por favor corrige los siguientes errores:</p>
        <ul>
          @foreach($errors->all() as $error)
            <li> {{ $error }} </li>
          @endforeach
        </ul>
    </div>
  @endif



	{{ csrf_field() }}
  {{method_field('PUT')}}
{{-- <input type="hidden" name="_method" value="PUT"> --}}
  <div class="form-group">
    <label for="exampleInputEmail1">Nombre</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="nombre" value="{{$product->nombre}}" placeholder="Nombre">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Categoria</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="categoria" value="{{$product->categoria}}" placeholder="Categoria">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Detalle</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="detalle" value="{{$product->detalle}}" placeholder="Detalle">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Precio</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="precio" value="{{$product->precio}}" placeholder="Precio">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>


@stop
