@extends('layout.base')

@section('head')
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('css/producto.css') }}" rel="stylesheet" />
@endsection


@section('content')
<div class="container">
    <div class="row my-3">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <h2> Producto : {{ $producto -> nombre}}</h2>
        </div>
    </div>
    <div class="row mt-2 mb-4">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <form method="" action="">
                @csrf
                <div>
                    <label for="formFileLg" class="form-label">Imagen del producto</label>
                    <input class="form-control form-control-lg" id="SeleccionArchivo" type="file" accept="image/*">
                    {{-- Aqui se mostrara una previzualizacion de la imagen subida --}}
                    <img id= "imagenPre" src="">
                    <script src=""></script>
                </div>
                <br>
                
                <div class="mb-3">
                    <label class="col"for="existencia">
                        Nombre del producto:
                    </label>
                    <input
                        type="text"
                        name="nombre"
                        class="form-control"
                        value="{{ $producto-> nombre }}"
                        id="InputNombre"
                    >
                </div>

                <div class="mb-3">
                    <label class="col"for="existencia">
                        Precio del producto:
                    </label>
                    <input
                        type="int"
                        name="Precio"
                        class="form-control"
                        value="{{ $producto -> precio }}"
                        id="InputPrecio"
                    >
                </div>

                <div class="conteiner" >
                    <label class="col" for="existencia">
                        Cantidad de stock actual:
                    </label>
                    <input 
                        class="text-center col" 
                        id="inputStock" 
                        type="num" 
                        value="{{$producto -> existencias}}"
                        style="max-width: 4rem" 
                        disabled
                    />
                </div>

                <br>
                <div class="conteiner" >
                    <label class="col"for="existencia">
                        Cantidad de stock nueva:
                    </label>
                    <input 
                        class="text-center col" 
                        id="inputStock" 
                        type="num" 
                        min="{{$producto -> existencias}}"
                        style="max-width: 4rem" 
                    />
                </div>

                <br>
                <div class="d-grid">
                    <button
                        class="btn btn-primary btn-login text-uppercase fw-bold"
                        type="submit"
                    >
                        Modificar Producto
                    </button>
                </div>
            </form>
            {{-- <div class="card border-0 shadow rounded-3 my-5">
                <div class="card-body p-4 p-sm-5">
                    <h5 class="card-title text-center mb-5 fw-light fs-5">Iniciar sesion</h5>
                </div>
            </div> --}}
        </div>
    </div>
</div>

@endsection