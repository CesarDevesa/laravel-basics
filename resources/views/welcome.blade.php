<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>
            @endauth
        </div>
    @endif

    <div class="content">
        <div class="title m-b-md">
            Laravel
        </div>

        <div>
            <form action="/fooPost" method="POST">
                @csrf
                <input type="text" name="testPost" placeholder="Test POST">
                <input type="text" name="testPost2" placeholder="Test POST 2">
                <br>
                <button>Enviar</button>
            </form>
        </div>
        <div style="padding-top: 50px">
            <form action="/fooControllerPost" method="POST">
                @csrf
                <input type="text" name="id" placeholder="Id to Controller">
                <br>
                <button>Enviar</button>
            </form>
        </div>
        <div style="padding-top: 50px">
            <a href="{{ route('contacts') }}">contatos/</a>
            {{--Pra enviar parametros:--}}
            {{--<a href="{{ route('contacts', $data->id) }}">Contatos</a>--}}
        </div>
        <div style="padding-top: 10px">
            {{--<a href="{{ route('contacts.show',[435]) }}">contato/{id} as contacts.show</a>--}}
            <a href="{{ route('contacts.show','5') }}">contatos/5</a>
        </div>
        <div style="padding-top: 50px">
            <a href="{{ route('admin.courses') }}">Rota interna: adm/curso as admin.courses</a>
        </div>

        <div style="padding-top: 50px">
            @guest
                <p>User não autenticado!</p>
            @else
                <h1>Área Restrita</h1>
                <p>User <strong>{{ Auth::user()->name }}</strong> autenticado!</p>
                <p><a href="{{ route('admin.') }}">Admin</a></p>
                <p><a href="{{ route('admin.users') }}">Users</a></p>
                <p><a href="{{ route('admin.roles') }}">Roles</a></p>
                <p><a href="{{ route('admin.courses') }}">Cursos</a></p>
            @endguest
        </div>



    </div>
</div>
</body>
</html>
