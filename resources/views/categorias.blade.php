@extends('layout.base')


@section('head')
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('css/inicio.css') }}" rel="stylesheet" />
@endsection


@section('content')

        <br>
        Nombre de la categoria: {{$categoria -> nombre}}
        
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('js/usuarios.js') }}"></script>
@endsection
