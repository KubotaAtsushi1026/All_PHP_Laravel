{"filter":false,"title":"register.brade.php","tooltip":"/instagram/resources/views/auth/register.brade.php","undoManager":{"mark":2,"position":2,"stack":[[{"start":{"row":0,"column":0},"end":{"row":34,"column":11},"action":"insert","lines":["@section('content')","    <div class=\"text-center\">","        <h1>新規会員登録</h1>","    </div>","","    <div class=\"row\">","        <div class=\"col-sm-6 offset-sm-3\">","","            <form method=\"POST\" action=\"/signup\">","                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token() }}\">","                <div class=\"form-group\">","                    <label for=\"name\">名前</label>","                    <input type=\"text\"  name=\"name\" class=\"form-control\" id=\"name\">","                </div>","","                <div class=\"form-group\">","                    <label for=\"email\">メールアドレス</label>","                    <input type=\"email\" name=\"email\" class=\"form-control\" id=\"email\">","                </div>","","                <div class=\"form-group\">","                    <label for=\"password\">パスワード</label>","                    <input type=\"password\" name=\"password\"  class=\"form-control\" id=\"password\">","                </div>","","                <div class=\"form-group\">","                    <label for=\"password_confirmation\">パスワードの確認</label>","                    <input type=\"password\" name=\"password_confirmation\" class=\"form-control\" id=\"password_confirmation\">","                </div>","","                <button type=\"submit\" class=\"btn btn-primary btn-block\">登録</button>","            </form>","        </div>","    </div>","@endsection"],"id":1}],[{"start":{"row":0,"column":0},"end":{"row":1,"column":27},"action":"insert","lines":["@extends('layouts.app')","@section('title', '新規会員登録')"],"id":2}],[{"start":{"row":1,"column":27},"end":{"row":2,"column":0},"action":"insert","lines":["",""],"id":3}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":2,"column":0},"end":{"row":2,"column":0},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1643712724386,"hash":"e82d61de6e5b9744de1ef411ab6bbaa61b83fcc3"}