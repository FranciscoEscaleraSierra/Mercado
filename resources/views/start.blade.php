@extends('layouts.main')

@section('head')
    <title>Mercado</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/favicon_home.ico') }}" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('css/home.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/producto.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/usuarios.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/login.css') }}" rel="stylesheet" />
@endsection


@section('content')

</header>
<!-- Page content-->
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
                <!-- Pagination-->
                <!-- <nav aria-label="Pagination">
                    <hr class="my-0" />
                    <ul class="pagination justify-content-center my-4">
                        <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1" aria-disabled="true">Newer</a></li>
                        <li class="page-item active" aria-current="page"><a class="page-link" href="#!">1</a></li>
                        <li class="page-item"><a class="page-link" href="#!">2</a></li>
                        <li class="page-item"><a class="page-link" href="#!">3</a></li>
                        <li class="page-item disabled"><a class="page-link" href="#!">...</a></li>
                        <li class="page-item"><a class="page-link" href="#!">15</a></li>
                        <li class="page-item"><a class="page-link" href="#!">Older</a></li>
                    </ul>
                </nav> -->
            </div>
        </div>
    </div>

    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container"><p class="m-0 text-center text-white">S8A Escalera - Barranco - Martinez &copy; Mercado 2022</p></div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('js/home.js') }}"></script>

@endsection
