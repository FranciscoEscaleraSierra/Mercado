@extends('layout.base')

@section('head')
  <!-- Core theme CSS (includes Bootstrap)-->
  <link href="{{ asset('css/producto.css') }}" rel="stylesheet" />
@endsection

@section('content')
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
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- Core theme JS-->
<script src="{{ asset('js/home.js') }}"></script>
<script src="{{ asset('js/usuarios.js') }}"></script>
@endsection