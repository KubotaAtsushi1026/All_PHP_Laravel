{"filter":false,"title":"welcome.blade.php","tooltip":"/instagram/resources/views/welcome.blade.php","undoManager":{"mark":1,"position":1,"stack":[[{"start":{"row":0,"column":0},"end":{"row":99,"column":0},"action":"remove","lines":["<!DOCTYPE html>","<html lang=\"{{ str_replace('_', '-', app()->getLocale()) }}\">","    <head>","        <meta charset=\"utf-8\">","        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">","","        <title>Laravel</title>","","        <!-- Fonts -->","        <link href=\"https://fonts.googleapis.com/css?family=Nunito:200,600\" rel=\"stylesheet\">","","        <!-- Styles -->","        <style>","            html, body {","                background-color: #fff;","                color: #636b6f;","                font-family: 'Nunito', sans-serif;","                font-weight: 200;","                height: 100vh;","                margin: 0;","            }","","            .full-height {","                height: 100vh;","            }","","            .flex-center {","                align-items: center;","                display: flex;","                justify-content: center;","            }","","            .position-ref {","                position: relative;","            }","","            .top-right {","                position: absolute;","                right: 10px;","                top: 18px;","            }","","            .content {","                text-align: center;","            }","","            .title {","                font-size: 84px;","            }","","            .links > a {","                color: #636b6f;","                padding: 0 25px;","                font-size: 13px;","                font-weight: 600;","                letter-spacing: .1rem;","                text-decoration: none;","                text-transform: uppercase;","            }","","            .m-b-md {","                margin-bottom: 30px;","            }","        </style>","    </head>","    <body>","        <div class=\"flex-center position-ref full-height\">","            @if (Route::has('login'))","                <div class=\"top-right links\">","                    @auth","                        <a href=\"{{ url('/home') }}\">Home</a>","                    @else","                        <a href=\"{{ route('login') }}\">Login</a>","","                        @if (Route::has('register'))","                            <a href=\"{{ route('register') }}\">Register</a>","                        @endif","                    @endauth","                </div>","            @endif","","            <div class=\"content\">","                <div class=\"title m-b-md\">","                    Laravel","                </div>","","                <div class=\"links\">","                    <a href=\"https://laravel.com/docs\">Docs</a>","                    <a href=\"https://laracasts.com\">Laracasts</a>","                    <a href=\"https://laravel-news.com\">News</a>","                    <a href=\"https://blog.laravel.com\">Blog</a>","                    <a href=\"https://nova.laravel.com\">Nova</a>","                    <a href=\"https://forge.laravel.com\">Forge</a>","                    <a href=\"https://github.com/laravel/laravel\">GitHub</a>","                </div>","            </div>","        </div>","    </body>","</html>",""],"id":2},{"start":{"row":0,"column":0},"end":{"row":7,"column":11},"action":"insert","lines":["@extends('layouts.app')","@section('title', '会員制写真投稿サイト')","@section('content')","    <div class=\"row\">","        <a href=\"/signup\" class=\"offset-sm-1 col-sm-4 btn btn-primary\">新規会員登録</a>","        <a href=\"/login\" class=\"offset-sm-1 col-sm-4 btn btn-danger\">ログイン</a>","    </div>","@endsection"]}],[{"start":{"row":0,"column":0},"end":{"row":7,"column":11},"action":"remove","lines":["@extends('layouts.app')","@section('title', '会員制写真投稿サイト')","@section('content')","    <div class=\"row\">","        <a href=\"/signup\" class=\"offset-sm-1 col-sm-4 btn btn-primary\">新規会員登録</a>","        <a href=\"/login\" class=\"offset-sm-1 col-sm-4 btn btn-danger\">ログイン</a>","    </div>","@endsection"],"id":3},{"start":{"row":0,"column":0},"end":{"row":7,"column":11},"action":"insert","lines":["@extends('layouts.app')","@section('title', '会員制写真投稿サイト')","@section('content')","    <div class=\"row\">","        {!! link_to_route('signup.get', '新規会員登録', [], ['class' => 'offset-sm-1 col-sm-4 btn btn-primary']) !!}","        {!! link_to_route('login', 'ログイン', [], ['class' => 'offset-sm-1 col-sm-4 btn btn-danger']) !!}","    </div>","@endsection"]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":7,"column":11},"end":{"row":7,"column":11},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1643713276017,"hash":"a3b103931a9bfb37378c1a38241e4e0e75dc7be3"}