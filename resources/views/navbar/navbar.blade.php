<header>
  <nav class="navbar navbar-expand-lg bg-dark barraNavegacion">
    <div class="container">
      <a class="navbar-brand text-white tituloNav" href="{{ route('home') }}">
        E-Laravel
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Left Side Of Navbar -->
        <ul class="navbar-nav me-auto"> </ul>
        <div class="d-flex justify-content-between enlacesNav">

          {{-- @foreach ($productos->unique('categoria') as $prod)
            <a class="dropdown-item text-white btnNav"
              href="{{ route('categoria', $prod->categoria) }}">{{ $prod->categoria }}</a>
          @endforeach --}}

        </div>
        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ms-auto">
          <!-- Authentication Links -->
          @guest
            @if (Route::has('login'))
              <li class="nav-item enlacesNav">
                <a class="nav-link text-white btnNav" href="{{ route('login') }}">{{ __('Login') }}</a>
              </li>
            @endif

            @if (Route::has('register'))
              <li class="nav-item enlacesNav">
                <a class="nav-link text-white btnNav" href="{{ route('register') }}">{{ __('Register') }}</a>
              </li>
            @endif
          @else
            <li class="nav-item dropdown enlacesNav">
              <a id="navbarDropdown" class="nav-link dropdown-toggle text-capitalize text-white btnNav" href="#"
                role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }}
              </a>

              <div class="dropdown-menu dropdown-menu-end " aria-labelledby="navbarDropdown">
                <a class="dropdown-item adminUser" href="#">Mis datos</a>
                <a class="dropdown-item adminUser" href="#">Historial compras</a>
                @if (Auth::user()->admin == true)
                  <a class="dropdown-item adminUser" href="{{ route('admin') }}">Administrador</a>
                @endif
                <a class="dropdown-item adminUser" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                  {{ __('Cerrar sesión') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
                </form>
              </div>
            </li>
          @endguest
        </ul>

        <a class="nav-link text-white d-flex justify-content-center align-items-center icoCarrito" href="#">
          <span class="nav-icon">
            <div class="cart-items">0</div>
            <i class="fas fa-shopping-cart"></i>
          </span>
        </a>

      </div>
    </div>
  </nav>
</header>
