<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Mercado</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{{ asset('assets/categoria.ico') }}" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('css/categoria.css') }}" rel="stylesheet" />
    </head>
    <body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="{{ route('start') }}">Mercado</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                @section('search_widget')
                <!-- Search widget-->
                <div class="col-lg-9">
                    <div class="input-group">
                        <form method="POST" action="{{ route('start.search') }}">
                            @csrf
                            <input class="form-control" type="text" placeholder="Busca un producto!!" aria-label="Enter search term..." aria-describedby="button-search" name='nombre' value="{{ old('nombre') }}"/>
                            <button class="btn btn-primary" id="button-search" type="submit">Go!</button>
                        </form>
                    </div>
                </div>
                <!-- Search widget end  -->
                @show
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Entrar</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('signup') }}">Registrarse</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nombre</th>
              <th scope="col">Activa</th>
              <th scope="col"># Productos</th>
              <th scope="col">Acciones</th>
            </tr>
          </thead>
          <tbody>
            @foreach($categorias as $categoria)
                <tr>
                  <th scope="row">{{ $categoria->id }}</th>
                  <td>{{ $categoria->nombre }}</td>
                  <td>{{ $categoria->activa }}</td>
                  <td>{{ $categoria->productos_count }}</td>
                  <td>
                    <a href="{{ route('supervisor.categorias.edit', [$categoria->id]) }}" class="btn btn-small">Editar</a>
                    <a href="{{ route('supervisor.categorias.destroy', [$categoria->id]) }}" class="btn btn-small">Eliminar</a>
                  </td>
                </tr>
            @endforeach
          </tbody>
        </table>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('js/categoria.js') }}"></script>
    </body>
</html>
