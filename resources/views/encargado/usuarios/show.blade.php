@extends('layout.base')

@section('head')
        <link href="{{ asset('css/usuario.css') }}" rel="stylesheet" />
@endsection

@section('content')
<body>
    <img src="assets/images/top-circle.svg" alt="top circle" class="bg-image bg-image--top" />
    <img
      src="assets/images/bottom-circle.svg"
      alt="bottom circle"
      class="bg-image bg-image--bottom"
    />
    <article class="card">
      <header class="card__header">
        <img src="assets/images/card-pattern.svg" alt="pattern card" class="card__header-image" />
        <img src="assets/images/victor.jpg" alt="profile image" class="card__header-profile" />
      </header>
      <section class="card__body">
        <p class="card__text">
          Victor Crest
          <span class="card__text card__text--light">26</span>
        </p>
        <p class="card__text card__text--light">Chiapa de Corzo</p>
      </section>
      <footer class="card__footer">
        <div class="card__stats">
          <p class="card__number">2</p>
          <p class="card__text card__text--light">Compras</p>
        </div>
        <div class="card__stats">
          <p class="card__number">0</p>
          <p class="card__text card__text--light">Ventas</p>
        </div>
        <div class="card__stats">
          <p class="card__number">0</p>
          <p class="card__text card__text--light">Interacciones</p>
        </div>
      </footer>
    </article>
  </body>
@endsection
