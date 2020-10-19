<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Event Management</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<!-- <link rel="stylesheet" href="{{asset('assets/css/main.css')}}" /> -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body background="/images/event.jpg">
<div id="app">
        
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel" style="background-color: #d9d9d9;">
            <div class="container" >
                
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent" >
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto" >
                    <li class="nav-item"><a  class="nav-link" href="{{route('land')}}" style="font-size:15px;font-family:Helvetica; color:#b30000;"><b>Home</b></a></li>
					<li class="nav-item"><a  class="nav-link" href="{{route('package')}}" style="font-size:15px;font-family:Helvetica; color:#b30000;"><b>Package</b></a></li>
					<li class="nav-item"><a  class="nav-link" href="{{route('gallery')}}" style="font-size:15px;font-family:Helvetica; color:#b30000;"><b>Gallery</b></a></li>
					<li class="nav-item"><a   class="nav-link" href="" style="font-size:15px;font-family:Helvetica; color:#b30000;"><b>Contact</b></a></li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}" style="font-size:14px;font-family:Bradley Hand, cursive; color:#0000b3;"><i><u>{{ __('Login') }}</u></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}" style="font-size:14px;font-family:Bradley Hand, cursive; color:#0000b3;"><i><u>{{ __('Register') }}</u></i></a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a style="font-size:14px;font-family:Bradley Hand, cursive; color:#0000b3;" id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" style="font-size:14px;">
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

      
                    
                
               

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
