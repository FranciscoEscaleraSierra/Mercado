<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <!-- Local CSS -->
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <title></title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
          <div class="card border-0 shadow rounded-3 my-5">
            <div class="card-body p-4 p-sm-5">
              <h5 class="card-title text-center mb-5 fw-light fs-5">Iniciar sesion</h5>
              <form>
                <div class="form-floating mb-3">
                  <input type="email" class="form-control" id="floatingInput" placeholder="nombre@ejemplo.com">
                </div>
                <div class="form-floating mb-3">
                  <input type="password" class="form-control" id="floatingPassword" placeholder="Contraseña">
                </div>

                <div class="form-check mb-3">
                  <input class="form-check-input" type="checkbox" value="" id="rememberPasswordCheck">
                  <label class="form-check-label" for="rememberPasswordCheck">
                    Recordar contraseña
                  </label>
                  <p class="small mt-3">¿No tienes una cuenta? <a href="{{ route('signup') }}">Registrarse</a></p>
                <div class="d-grid">
                <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit">Entrar</button>
                </div>
              </form>
            </div>
          </div>
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
    <script src="{{ asset('js/scripts_home.js') }}"></script>
  </body>
</html>
