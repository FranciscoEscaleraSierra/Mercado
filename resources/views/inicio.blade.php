@extends('layout.base')

@section('head')
    <link href="{{ asset('css/inicio.css') }}" rel="stylesheet" />
@endsection


@section('content')
<div class="container">
    <!-- Side widgets-->
    <div class="col-lg-12">
        <!-- Categories widget-->
        <div class="card mb-12">
            <div class="card-header">Categorias</div>
            <div class="card-body">
                <div class="row">
                  <div class="col-sm-2">
                      <ul class="list-unstyled mb-0">
                          @foreach ($categorias as $categoria)
                          <li><a href="{{ route('categorias.productos.index', ['categoria' => $categoria->id]) }}">{{ $categoria->nombre }}</a></li>
                          @endforeach
                      </ul>
                  </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <!-- Blog entries-->
            <div class="col-lg-12">
                <!-- Nested row for non-featured blog product-->
                <div class="row">
                    @foreach ($productos as $producto)
                    <div class="col-lg-4">
                        <!-- Blog post-->
                        <div class="card mb-4">
                            <a href="{{ route('productos.show', $producto->id) }}"><img class="card-img-top" src="https://dummyimage.com/700x350/dee2e6/6c757d.jpg" alt="..." /></a>
                            <div class="card-body">
                                <div class=<"small text-muted">{{ $producto->created_at }}</div>
                                <h2 class="card-title h4">{{ $producto->nombre }}</h2>
                                <p class="card-text">{{ $producto->descripcion }}</p>
                                <a class="btn btn-primary" href="{{ route('productos.show', $producto->id) }}">${{ $producto->precio * 100 }}</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection