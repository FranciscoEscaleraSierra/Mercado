@extends('layout.base')

@section('head')
        <link href="{{ asset('css/inicio.css') }}" rel="stylesheet" />
@endsection

@section('content')
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nombre</th>
          <th scope="col">Precio</th>
          <th scope="col">Existencias</th>
          <th scope="col">Usuario ID</th>
          <th scope="col">Acciones</th>
        </tr>
      </thead>
      <tbody>
        @foreach($productos as $producto)
            <tr>
              <th scope="row">{{ $producto->id }}</th>
              <td>{{ $producto->nombre }}</td>
              <td>{{ $producto->precio }}</td>
              <td>{{ $producto->existencias }}</td>
              <td>{{ $producto->usuario_id }}</td>
              <td>
                <a href="{{ route('', [$producto->id]) }}" class="btn btn-primary">Editar</a>
                <a href="{{ route('', [$producto->id]) }}" class="btn btn-danger">Eliminar</a>
              </td>
            </tr>
        @endforeach
      </tbody>
    </table>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('js/home.js') }}"></script>
    <script src="{{ asset('js/usuarios.js') }}"></script>
@endsection