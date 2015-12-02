<!DOCTYPE html>
<html lang="hr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script type="text/javascript" src="{{ URL::asset('JS/izracun.js') }}"></script>
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
    <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="{{ URL::asset('JS/jquery-1.9.1.js') }}"></script>
    <title>Troškovi prijevoza</title>
</head>
<body>

<div class="container">

    <div class="jumbotron">
        <center><h1>Troškovi prijevoza</h1></center>
    </div>

    <nav class="navbar">
        <ul class="nav nav-tabs">
            <li><a href="{{ action('PagesController@view') }}"><span class="glyphicon glyphicon-home"></span> Početna</a></li>
            <li><a href="{{ action('PagesController@index') }}"><span class="glyphicon glyphicon-th"></span> Spremljeni podaci</a></li>
        </ul>
    </nav>

</div>

<div class="container">
@yield('content')
</div>

<div class="container">
    <div class="jumbotron">
        <p style="font-size: 100%; text-align: center">Diplomski rad - Miro Babić &copy;</p>
    </div>
</div>

</body>
</html>