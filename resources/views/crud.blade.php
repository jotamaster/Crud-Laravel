@extends('main.main')

@section('content')

<div class="container">

    <div class="row">
        <div class=" col-md-12 box">
            <div class=" col-md-12 col-lg-12 text-center">

            <h4>tabla</h4><a href="/create" class="btn btn-default btn-lg active" role="button">Agregar</a>
              <table class="table">
      <thead>
        <tr>
          <th>Nombre</th>
          <th>Categoria</th>
          <th>Detalle</th>
          <th>Precio</th>
          <th>Editar</th>
          <th>Eliminar</th>
        </tr>
      </thead>
      <tbody>
      @foreach($products as $product)
        <tr>
          <td>{{ $product->nombre }}</td>
          <td>{{ $product->categoria }}</td>
          <td>{{$product->detalle}}</td>
          <td>{{$product->precio}}</td>

          <!--<td><a href="{{ url('crud/'.'edit/'. $product->id) }}">editar</a></td>}}-->
          <td>
          <form class="deleteForm" method="POST" action="crud/edit/{{$product->id}}">

        {{ csrf_field() }}
          <input class="btn btn-warning" type="submit" value="edit">
        </form>
        </td>

          <td>
          <form class="deleteForm" method="POST" action="crud/{{$product->id}}">
        {{method_field('DELETE')}}
        {{ csrf_field() }}
          <input class="btn btn-danger" type="submit" value="Eliminar">
        </form>
        </td>

        </tr>
      @endforeach
      </tbody>
    </table>
</div>

            </div>
        </div>
    </div>


</div>
<!-- /.container -->
@stop
