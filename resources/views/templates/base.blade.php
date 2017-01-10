<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <script type="text/javascript" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <header>
      <h1 class="text-center">Applications</h1>
    </header>

      <main>
            <div class="navbar navbar-inverse">
                <ul class="nav navbar-nav">
                  <li>
                    @if (Auth::check())
                    <span>{{ Auth::user()->name }}</span>
                    @endif
                  </li>
                  <li><a href="home">Accueil</a></li>
                  <li><a href="contact">Contact</a></li>
                  <li><a href="magasin">Magasin</a></li>
                  @if (Auth::check())
                  <li><a href="logout">Logout</a></li>
                  <li><a href="panier">Panier</a></li>
                  @else
                  <li><a href="login">Login</a></li>
                  <li><a href="register">Register</a></li>
                  @endif
                </ul>
            </div>
      </main>
      <div class="container">
        @yield('content')
      </div>
      <footer class="text-center">
        <div class="col-md-12">
          <p>Copyright © ITAkademy 2017
          <a href="contact">  Nous contacter</a>
          </p>
        </div>


  </body>
</html>
