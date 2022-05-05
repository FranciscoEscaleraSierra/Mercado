@extends('layout.base')

@section('head')
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('css/producto.css') }}" rel="stylesheet" />
@endsection


@section('content')
<div class="container">
    <div class="row my-3">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <h2> Producto : {{$producto -> nombre}}</h2>
        </div>
    </div>
    <div class="row mt-2 mb-4">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                @csrf
                <div>
                    <label for="formFileLg" class="form-label">Imagen del producto:</label>
                    {{-- <input class="form-control form-control-lg" id="SeleccionArchivo" type="file" accept="image/*">
                    Aqui se mostrara una previzualizacion de la imagen subida --}}
                    <img id= "imagenPre">
                    <script src=""></script>
                </div>
                <br>
                
                <div class="mb-3">
                    <label class="form-check-label" for="existencia">
                       Precio del producto:
                    </label>
                    <input
                        type="num"
                        name="Precio"
                        class="form-control"
                        value="{{ $producto -> precio }}"
                        id="InputPrecio"
                        disabled
                    >
                </div>

                <div class="mb-3">
                    <label class="form-check-label" for="existencia">
                    Cantidad de stock actual:
                    </label>
                    <input 
                    class="text-center col" 
                    id="inputStock" 
                    type="num" 
                    value="{{ $producto -> existencias}}" 
                    style="max-width: 3rem" 
                    disabled
                    />
                </div>
                <br>
            {{-- <div class="card border-0 shadow rounded-3 my-5">
                <div class="card-body p-4 p-sm-5">
                    <h5 class="card-title text-center mb-5 fw-light fs-5">Iniciar sesion</h5>
                </div>
            </div> --}}
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
