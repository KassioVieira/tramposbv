<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <title>TrampoBV</title>

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

        i{
            font-size: 30px !important;
        }


    </style>
</head>
<body>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="/">TrampoBV</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="/"><i class="fa fa-home"></i>Home</a></li>
            <li><a href="/"></a></li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-user-circle"></i>Minha Conta
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="/login">Fazer Login</a></li>
                    <li><a href="#">Cadastre-se</a></li>
                </ul>
            </li>
        </ul>


    </div>
</nav>

<section class="conteudo">
    @yield('content')
</section>

@include('template.anunciar_empresa')

<footer class="footer">
    <div class="container">
        <p class="text-muted">Desenvolvido por Kassio Luz.</p>
    </div>
</footer>
</body>
</html>
