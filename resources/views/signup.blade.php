<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <!-- Local CSS -->
    <link href="{{ asset('css/singup.css') }}" rel="stylesheet">
    <title>Subscribe | Welcome</title>
  </head>
  <body>
    <section id="register">
      <div class="container">
        <h1 class="pt-5 font-weight-bold text-center">Registrarse<h1></h1>
        <form action="" class="w-75 p-5 pb-5 m-auto">
          <div class="row">
            <div class="col">
              <div class="form-group">
                <label for="name" class="text-white">Nombre</label>
                <input class="form-control" type="text">
              </div>
            </div>
            <div class="col">
              <div class="form-group">
                <label for="email" class="text-white">Correo</label>
                <input class="form-control" type="email">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <div class="form-group">
                <label for="password" class="text-white">Contraseña</label>
                <input class="form-control" type="password">
              </div>
            </div>
            <div class="col">
              <div class="form-group">
                <label for="passwordControl" class="text-white">Repetir Contraseña</label>
                <input class="form-control" type="text">
              </div>
            </div>
          </div>
          <button class="btn btn-dark w-100 mt-3">Crear Cuenta</button>
          <p class="small mt-3">¿Ya tienes una cuenta? <a href="{{ route('login') }}">Entrar</a></p>
        </form>
      </div>
    </section>

    <footer class="pt-4 pb-2 small">
      <div class="container">
        <div class="row">
          <div class="col-3">
            <p>
              S8A Escalera - Barranco - Martinez &copy; Mercado 2022
            </p>
          </div>
        </div>
      </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>
