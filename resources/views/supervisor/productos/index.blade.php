@extends('layout.base')


@section('head')
        <link href="{{ asset('css/inicio.css') }}" rel="stylesheet" />
@endsection

@section('content')
    <!-- Page header with logo and tagline-->
    <header class="py-5 bg-light border-bottom mb-4">
        <div class="container">
            <div class="text-center my-5">
                <h1 class="fw-bolder">Welcome to Blog Home!</h1>
                <p class="lead mb-0">A Bootstrap 5 starter layout for your next blog homepage</p>
            </div>
        </div>
    </header>

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
                <nav aria-label="Pagination">
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
                </nav>
            </div>
        </div>
    </div>
@endsection
