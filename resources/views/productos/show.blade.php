@extends('layout.base')

@section('head')
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('css/inicio.css') }}" rel="stylesheet" />
@endsection

@section('content')
        <!-- Product section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="https://dummyimage.com/600x700/dee2e6/6c757d.jpg" alt="..." /></div>
                    <div class="col-md-6">
                        <div class="small mb-1">{{ $producto->created_at }}</div>
                        <h1 class="display-5 fw-bolder">{{ $producto->nombre }}</h1>
                        <div class="fs-5 mb-5">
                            <!-- <span class="text-decoration-line-through">$45.00</span> -->
                            <span>${{ $producto->precio * 100}}</span>
                        </div>
                        <p class="lead">{{ $producto->descripcion }}</p>
                        <div class="d-flex">
                            <input class="form-control text-center me-3" id="inputQuantity" type="num" value="1" style="max-width: 3rem" />
                            <button class="btn btn-outline-dark flex-shrink-0" type="button">
                                <i class="bi-cart-fill me-1"></i>
                                Comprar
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('js/home.js') }}"></script>
    <script src="{{ asset('js/usuarios.js') }}"></script>
@endsection
