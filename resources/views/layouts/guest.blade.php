<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
    [v-cloak] {
        display: none;
    }

   .order-lg-last {
    -webkit-box-ordinal-group: 14;
    -ms-flex-order: 13;
    order: 13; }
 .btn-custom {
  font-weight: 500;
  color: #046df4;
  border-bottom: 4px solid #4394fc; }

  .btn.btn-secondary {
    background: #ff8000;
    border: 1px solid #ff8000;
    color: #fff; }
    .btn.btn-secondary:hover, .btn.btn-secondary:focus, .btn.btn-secondary:active {
      border: 1px solid #ff8000;
      color: #fff; }
    </style>
</head>
<body>
    <div id="app" v-cloak>
            <nav class="navbar py-4 navbar-expand-lg ftco_navbar navbar-light bg-light flex-row">
                    <div class="container">
                        <div class="row no-gutters d-flex align-items-start align-items-center px-3 px-md-0">
                            <div class="col-lg-2 pr-4 align-items-center">
                                <a class="navbar-brand" href="index.html">Dr.<span>care</span></a>
                            </div>
                            <div class="col-lg-10 d-none d-md-block">
                                <div class="row d-flex">
                                    <div class="col-md-4 pr-4 d-flex topper align-items-center">
                                        <div class="icon bg-white mr-2 d-flex justify-content-center align-items-center"><i class="material-icons md-24 rounded">room</i><span class="icon-map"></span></div>
                                        <span class="text">Address: 198 West 21th Street, Suite 721 New York NY 10016</span>
                                    </div>
                                    <div class="col-md pr-4 d-flex topper align-items-center">
                                        <div class="icon bg-white mr-2 d-flex justify-content-center align-items-center"><i class="material-icons md-24 rounded">email</i><span class="icon-paper-plane"></span></div>
                                        <span class="text">Email: youremail@email.com</span>
                                    </div>
                                    <div class="col-md pr-4 d-flex topper align-items-center">
                                        <div class="icon bg-white mr-2 d-flex justify-content-center align-items-center"><i class="material-icons md-24 rounded">phone</i><span class="icon-phone2"></span></div>
                                        <span class="text">Phone: + 1235 2355 98</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                      </div>
                </nav>
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
                <div class="container d-flex align-items-center">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="oi oi-menu"></span> Menu
                  </button>
                  <p class="button-custom order-lg-last mb-0"><a href="appointment.html" class="btn btn-secondary py-2 px-3">Make An Appointment</a></p>
                  <div class="collapse navbar-collapse" id="ftco-nav">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active"><a href="index.html" class="nav-link pl-0">Home</a></li>
                        <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
                        <li class="nav-item"><a href="doctor.html" class="nav-link">Doctor</a></li>
                        <li class="nav-item"><a href="department.html" class="nav-link">Departments</a></li>
                        <li class="nav-item"><a href="pricing.html" class="nav-link">Pricing</a></li>
                        <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
                      <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
                    </ul>
                  </div>
                </div>
              </nav>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
@yield('scripts')
</body>
</html>
