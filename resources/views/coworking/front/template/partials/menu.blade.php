      <!--Main Navigation-->
  <header>
    <!-- Intro settings -->
    <style>
      #intro {
<!--Main Navigation-->
<header>
    <!-- Intro settings -->
    <style>
        #intro {

        /* Margin to fix overlapping fixed navbar */
        margin-top: 100px;
      }
    </style>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
<<<<<<< HEAD
        <div class="container-fluid">
            <!-- Navbar brand -->
            <a class='rnavbar-brand"' href="#" target="_blank">
                <img <="" a="" alt="" height="55px" loading="lazy" src="{{ asset('img/logo.png') }}" style="margin-top: -3px;">
                    <button aria-controls="navbarExample01" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-mdb-target="#navbarExample01" data-mdb-toggle="collapse" type="button">
                        <i class="fas fa-bars">
                        </i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarExample01">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item active">
                                <a aria-current="page" class="nav-link" href="{{route('index')}}">
                                    Inicio
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('change')}}" rel="nofollow" target="_blank">
                                    Intercambios
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('blog')}}" target="_blank">
                                    Blog
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('help')}}" target="_blank">
                                    Ayuda
                                </a>
                            </li>
                        </ul>
                        {{--
                        <span>
                            {{ Auth::user()->rol }}
                        </span>
                        --}}

                             @if( Auth::check())
                            <?php $user = Auth::user() ?>
                            <ul class="navbar-nav d-flex flex-row">
                            <li class="nav-item me-3 me-lg-0">

                            <div class="btn-group dropstart">
                                <button aria-expanded="false" class="btn btn-primary dropdown-toggle" data-mdb-toggle="dropdown" id="dropdownMenu2" type="button">
                                    User
                                </button>
                                <ul aria-labelledby="dropdownMenu2" class="dropdown-menu">
                                    <li class="nav-item me-3 me-lg-0">
                                        <span class="span-title text-uppercase">
                                            {{ $user->full_name }}
                                        </span>
                                    </li>
                                    <li>
                                        <a href="{{ url('user-perfil') }}" class="span-title text-uppercase" >Perfil</a>
                                    </li>
                                    <li class="nav-item-btn text-center nav-item nav-item me-3 me-lg-0">
                                        <a class="btn-wide btn btn-primary btn-sm " href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            Cerrar sesión
                                        </a>
                                        <form action="{{ route('logout') }}" id="logout-form" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </li>
                                    </ul>
                                </div>
                             </li>
                             </ul>
                    @else
                        <ul class="navbar-nav d-flex flex-row">
                            <!-- Icons -->
                            <li class="nav-item me-3 me-lg-0">
                                <a class="nav-link" href="" rel="nofollow" target="_blank">
                                    <i class="fab fa-facebook-f">
                                    </i>
                                </a>
                            </li>
                            <li class="nav-item me-3 me-lg-0">
                                <a class="nav-link" href="" rel="nofollow" target="_blank">
                                    <i class="fab fa-twitter">
                                    </i>
                                </a>
                            </li>
                             <li class="nav-item me-3 me-lg-0">
                                <a class="nav-link" href="" rel="nofollow" target="_blank">
                                    <i class="fab fa-instagram">
                                    </i>
                                </a>
                            </li>
                               <li class="nav-item me-3 me-lg-0">
                                <a class=" btn-wide btn btn-primary btn-sm fix-btn-login" href="{{ url('login') }}" rel="nofollow" target="_blank">
                                    login
                                    </i>
                                </a>
                            </li>
                        </ul>
                    @endif

                    </div>
            </a>
=======
      <div class="container-fluid">
        <!-- Navbar brand -->
        <a class=rnavbar-brand" target="_blank" href="#">
          <img src="{{ asset('img/logo.png') }}" height="55px" alt="" loading="lazy"
            style="margin-top: -3px;" /
        </a>
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarExample01"
          aria-controls="navbarExample01" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarExample01">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item active">
              <a class="nav-link" aria-current="page" href="{{route('index')}}">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('change')}}" rel="nofollow"
                target="_blank">Intercambios</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('blog')}}" target="_blank">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('help')}}" target="_blank">Ayuda</a>
            </li>
        </ul>
            <span>{{ Auth::user()->rol }}</span>
          <ul class="navbar-nav d-flex flex-row">
            <!-- Icons -->
            <li class="nav-item me-3 me-lg-0">
              <a class="nav-link" href="" rel="nofollow" target="_blank">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="nav-item me-3 me-lg-0">
              <a class="nav-link" href="" rel="nofollow" target="_blank">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="nav-item me-3 me-lg-0">
              <a class="nav-link" href="" rel="nofollow" target="_blank">
                <i class="fab fa-instagram"></i>
              </a>
            </li>
          </ul>
>>>>>>> solucion Multi aAuth en coworkin  con roles admin|socio|invitado
        </div>
    </nav>
    <!-- Navbar -->
</header>
