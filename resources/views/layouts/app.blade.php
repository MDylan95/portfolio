<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', 'Bokame Mac-Dylan KACOU')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <header>
      <div class="logo">
        <a href="{{ route('accueil') }}">Mac-Dylan KACOU</a>
        <span class="logo-sub">Web &amp; Mobile Developer | Transitioning to DevOps & Automation</span>
      </div>
      <div class="menu-toggle"></div>
      <ul class="menu">
        <li><a href="{{ route('accueil') }}" class="{{ request()->routeIs('accueil') ? 'active' : '' }}">Accueil</a></li>
        <li><a href="{{ route('apropos') }}" class="{{ request()->routeIs('apropos') ? 'active' : '' }}">À propos</a></li>
        <li><a href="{{ route('projets') }}" class="{{ request()->routeIs('projets') ? 'active' : '' }}">Projets</a></li>
        <li><a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a></li>
      </ul>
    </header>

    @yield('content')

    <footer>
      <p>Bokame Mac-Dylan KACOU &copy; {{ date('Y') }}</p>
      <div class="social-icons">
        <a href="https://www.linkedin.com/in/mac-dylan-kacou-207ba924b/" target="_blank" title="LinkedIn"><i class="fab fa-linkedin"></i></a>
        <a href="https://github.com/" target="_blank" title="GitHub"><i class="fab fa-github"></i></a>
       </div>
    </footer>

    <script src="{{ asset('js/menu.js') }}"></script>
  </body>
</html>
