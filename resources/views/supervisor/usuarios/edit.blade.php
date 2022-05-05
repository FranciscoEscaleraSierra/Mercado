@extends('layout.base')

@section('head')
        <link href="{{ asset('css/inicio.css') }}" rel="stylesheet" />
@endsection


@section('content')
<div class="container">
    <div class="row my-3">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <h2>Editar Usuario</h2>
        </div>
    </div>
    <div class="row mt-2 mb-4">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <form method="POST" action="{{ route('supervisor.usuarios') }}">
                @csrf
                <div class="form-floating mb-3">
                    <input
                        type="text"
                        name="nombre"
                        class="form-control"
                        value="{{ $usuario -> nombre }}"
                        id="floatingInput"
                        placeholder="Usuario"
                    >
                </div>

                <div class="form-check mb-3">
                    <input
                        class="form-check-input"
                        type="checkbox"
                        value="1"
                        checked="{{ old('activa') ? 'checked' : '' }}"
                        name="activa"
                        id="activa"
                    >
                    <label
                        class="form-check-label"
                        for="activa"
                    >
                        Activa
                    </label>
                </div>
                <div class="d-grid">
                    <button
                        class="btn btn-primary btn-login text-uppercase fw-bold"
                        type="submit"
                    >
                        Guardar
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
