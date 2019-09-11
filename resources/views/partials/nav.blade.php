<nav class="fixed-top extra navbar  navbar-expand-lg shadow-sm">
    <div class="container">
        <a class="navbar-brand text-white" href="{{ route('home') }}">{{ config('app.name') }}</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span><i class="material-icons" style="color: white">dehaze</i></span>
        </button>
        <div class="collapse justify-content-end navbar-collapse" id="navbarSupportedContent">
            <ul class="nav nav-pills navbar-nav">
{{--                 <li class="nav-item">
                    <a class="nav-link {{ routeActive('home') }}"
                    href="{{ route('home') }}"
                        >Inicio</a>
                </li> --}}
                <li class="nav-item">
                    <a class="nav-link {{ routeActive('about') }}"
                    href="{{ route('about') }}"
                        >Nosotros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ routeActive('servicios') }}"
                    href="{{ route('servicios') }}"
                        >Servicios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ routeActive('portfolio.*') }}"
                    href="{{ route('portfolio.index') }}"
                        >Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ routeActive('contacto') }}"
                    href="{{ route('contacto') }}"
                        >Contacto</a>
                </li>

                @auth
                    @if (auth()->user()->hasRoles(['admin']))
                        <li class="nav-item">
                            <a class="nav-link {{ routeActive('messages') }}"
                            href="{{ route('messages.index') }}"
                                >Mensajes</a>
                        </li>
                    @endif
                @endauth

                @auth
                    @if (auth()->user()->hasRoles(['admin']))
                        <li class="nav-item">
                            <a class="nav-link {{ routeActive('usuarios*') }}"
                            href="{{ route('usuarios.index') }}"
                                >Usuarios</a>
                        </li>
                    @endif
                @endauth

                @auth
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/usuarios/{{ auth()->id() }}/edit">
                                Mi cuenta
                            </a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                    {{-- <li><a href="#" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"
                        >Login Out</a>
                    </li> Este pedazo de código es para cuando quieras hacerlo sin el Dropdown --}}
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ routeActive('login') }}"
                        href="{{ route('login') }}">
                        Login</a>
                    </li>
                @endauth

            </ul>
        </div>
    </div>
</nav>
{{-- <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form> --}}
