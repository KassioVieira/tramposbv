<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>TrampoBV</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        .navbar-inverse {
            background-color: #58C9B9;
            border-color: #58C9B9;
        }

        .navbar-inverse .navbar-brand {
            color: #ffffff;
            font-family: monospace;
        }

        .navbar-inverse .navbar-nav>.active>a, .navbar-inverse .navbar-nav>.active>a:focus, .navbar-inverse .navbar-nav>.active>a:hover{
            background-color: #519D9E;
        }
        .navbar-inverse .navbar-nav>.open>a, .navbar-inverse .navbar-nav>.open>a:focus, .navbar-inverse .navbar-nav>.open>a:hover{
            background-color: #519D9E;
        }

        .nav, .navbar-nav{
            float: right;
        }

        .navbar-inverse .navbar-nav>li>a{
            color:#ffffff;
        }

        .btn-candidatar{
            background-color: #58C9B9;
            border-color: #58C9B9;
            color:#ffffff;
        }

        .btn-candidatar:hover{
            background-color: #519D9E;
            border-color: #519D9E;
            color:#ffffff;
        }

        .btn-candidatar.active, .btn-candidatar:active{
            background-color: #519D9E;
            border-color: #519D9E;
            color:#ffffff;
        }

        .btn-candidatar.focus, .btn-candidatar:focus{
            background-color: #519D9E;
            border-color: #519D9E;
            color:#ffffff;
        }

        .btn-link, .btn-link:focus, .btn-link:hover{
            color:#519D9E;
        }

        i{
            font-size: 30px !important;
        }


    </style>
</head>
<body>
<div id="app">
    <nav class="navbar navbar-inverse">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    TrampoBV
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/"><i class="fa fa-home" style="margin-right: 10px;"></i>Home</a></li>
                    @if (Auth::guest())
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-user-circle" style="margin-right: 10px;"></i>Minha Conta
                                <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ route('login') }}">Fazer Login</a></li>
                                <li><a href="{{ route('register') }}">Registra-se</a></li>
                            </ul>
                        </li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                <i class="fa fa-user-circle" style="margin-right: 10px;"></i>{{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')
</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
