<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./css/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,400;0,600;0,800;1,400;1,700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/832b6972f7.js" crossorigin="anonymous"></script>

    {{-- <link rel="stylesheet" type="text/css" href="{{url('css/login.css')}}"> --}}
    @section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    @stop
    

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    
    <div id="app">
        <section class="container">
        <aside class="side-section">
            <a href="" class="social-item instagram">
                <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
            <a href="" class="social-item facebook">
                <i class="fab fa-facebook "></i>
            </a>
            <a href="" class="social-item whatsapp">
                <i class="fa fa-whatsapp" aria-hidden="true"></i>
            </a>
            <a href="" class="social-item telegram">
                <i class="fa fa-telegram" aria-hidden="true"></i>
            </a>
            <!-- <div class="social">
                
            </div> -->
            <div class="gallery">
                <div class="item1 item"><img src="" alt=""></div>
                <div class="item2 item"><img src="" alt=""></div>
            </div>
        </aside>
        <aside class="login-section">
            <div class="login-container">
                <div class="logo">
                    <img src="./img/logo.png" alt="" class="logo_img">
                </div>
                
                        <div class="container">
                
                

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    
                          <!-- Authentication Links -->
                   
                    
               
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
        
                    
                </form>
            </div>
            <div class="info-text">
                <br>
                <span>Taller alemán</span>
                <span><i class="fas fa-phone"></i>318 3113608 - 3174553623</span>
                <span><i class="fas fa-map-marker-alt"></i>Carrera 20 A No. 17-37 </span>
                <span>San Juan de Pasto</span>
                <span><i class="fas fa-clock"></i>Horarios: 7:30 am - 8 pm</span>
                <br>
            </div>
                 @guest
                            @if (Route::has('login'))
                                
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                           <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                     </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('cerrar sesion') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
        </aside>
    </section>
        
            
    </div>
</body>
</html>
