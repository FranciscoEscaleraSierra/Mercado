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
          <th scope="col">Activa</th>
          <th scope="col"># Productos</th>
          <th scope="col">Acciones</th>
        </tr>
      </thead>
      <tbody>
        @foreach($categorias as $categoria)
            <tr>
              <th scope="row">{{ $categoria->id }}</th>
              <td>{{ $categoria->nombre }}</td>
              <td>{{ $categoria->activa }}</td>
              <td>{{ $categoria->productos_count }}</td>
              <td>
                <a href="{{ route('supervisor.categorias.edit', [$categoria->id]) }}" class="btn btn-small">Editar</a>
                <a href="{{ route('supervisor.categorias.destroy', [$categoria->id]) }}" class="btn btn-small">Eliminar</a>
              </td>
            </tr>
        @endforeach
      </tbody>
    </table>
@endsection
