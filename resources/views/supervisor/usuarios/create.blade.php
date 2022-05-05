@extends('layout.base')

@section('head')
        <link href="{{ asset('css/usuario.css') }}" rel="stylesheet" />
@endsection

@section('content')
<body>
    <section class="form-uregister">
        <h4>Registro de Usuario</h4>
        <input class="controls" type="text" name="nombres" id="nombreusu" placeholder="Nombre(s)...">
        <input class="controls" type="text" name="apellido" id="apellidousu" placeholder="Apellido(s)...">
        <input class="controls" type="email" name="coreo" id="correousu" placeholder="E-mail">
        <input class="controls" type="password" name="contraseña" id="contraseñausu" placeholder="Contraseña">
        <input class="boton" type="submit" value="Registrar">
    </section>
</body>
@endsection
