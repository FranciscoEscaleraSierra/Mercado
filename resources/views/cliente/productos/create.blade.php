@extends('layout.base')

@section('head')
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('css/producto.css') }}" rel="stylesheet" />
@endsection


@section('content')
<div class="container">
    <div class="row my-3">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <h2>Crear un producto</h2>
        </div>
    </div>
    <div class="row mt-2 mb-4">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <form method="post" action="{{ route('cliente.productos.store') }}" enctype="multipart/form-data">
                @csrf
                <div>
                    <label for="formFileLg" class="form-label">Imagen del producto</label>
                    <input class="form-control form-control-lg" id="SeleccionArchivo" type="file" accept="image/*" name="imagen">
                    {{-- Aqui se mostrara una previzualizacion de la imagen subida --}}
                    <img id= "imagenPre">
                    <script src=""></script>
                </div>
                <br>

                <div class="mb-3">
                    <input
                        type="text"
                        name="nombre"
                        class="form-control"
                        value="{{ old('nombre') }}"
                        id="InputNombre"
                        placeholder="Nombre del Producto"
                    />
                </div>

                <div class="mb-3">
                    <input
                        type="num"
                        name="precio"
                        class="form-control"
                        value="{{ old('precio') }}"
                        id="InputPrecio"
                        placeholder="Precio del Producto"
                    />
                </div>

                <div class="mb-3">
                    <input
                    type="text"
                    name="descripcion"
                    class="form-control"
                    value="{{ old('descripcion') }}"
                    id="InputDescripcion"
                    placeholder="Description"
                    />
                </div>

                <div class="mb-3">
                    <label class="form-check-label" for="existencia">
                    Cantidad de stock incial:
                    </label>
                    <input
                        class="text-center col"
                        id="inputStock"
                        type="num"
                        name="existencias"
                        value="{{ old('existencias') ? 'value' : '0'}}"
                        style="max-width: 3rem"
                    />
                </div>
                <br>
                <div class="d-grid">
                    <button
                        class="btn btn-primary btn-login text-uppercase fw-bold"
                        type="submit"
                    >
                        Crear Producto
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
