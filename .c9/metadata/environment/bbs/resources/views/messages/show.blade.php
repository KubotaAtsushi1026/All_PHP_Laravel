{"filter":false,"title":"show.blade.php","tooltip":"/bbs/resources/views/messages/show.blade.php","undoManager":{"mark":6,"position":6,"stack":[[{"start":{"row":0,"column":0},"end":{"row":0,"column":1},"action":"insert","lines":["a"],"id":1}],[{"start":{"row":0,"column":0},"end":{"row":0,"column":1},"action":"remove","lines":["a"],"id":2}],[{"start":{"row":0,"column":0},"end":{"row":0,"column":1},"action":"insert","lines":["あ"],"id":3}],[{"start":{"row":0,"column":1},"end":{"row":41,"column":11},"action":"insert","lines":["@extends('layouts.app')","@section('title', '投稿詳細')","@section('header', 'id: ' .  $message->id . 'の投稿詳細')","@section('content')","            <div class=\"row mt-2\">","                <table class=\"table table-bordered table-striped\">","                    <tr>","                        <th>id</th>","                        <td>{{ $message->id }}</td>","                    </tr>","                    <tr>","                        <th>名前</th>","                        <td>{{ $message->name }}</td>","                    </tr>","                    <tr>","                        <th>タイトル</th>","                        <td>{{ $message->title }}</td>","                    </tr>","                    <tr>","                        <th>内容</th>","                        <td>{{ $message->body }}</td>","                    </tr>","                    <tr>","                        <th>画像</th>","                        <td><img src=\"{{ asset('uploads/' . $message->image) }}\" alt=\"表示する画像がありません。\"></td>","                    </tr>","                </table>","            </div> ","            ","            <div class=\"row\">","                <a href=\"/messages/{{ $message->id }}/edit\" class=\"col-sm-6 btn btn-primary\">編集</a>","                <form class=\"col-sm-6\" action=\"/messages/{{ $message->id }}\" method=\"POST\">","                    {{ csrf_field() }}","                    <input type=\"hidden\" name=\"_method\" value=\"DELETE\">","                    <button type=\"submit\" class=\"btn btn-danger col-sm-12\" onclick=\"return confirm('投稿を削除します。よろしいですか？')\">削除</button>","                </form>","            </div>       ","        ","             <div class=\"row mt-5\">","                <a href=\"/\" class=\"btn btn-primary\">投稿一覧</a>","            </div>","@endsection"],"id":4}],[{"start":{"row":0,"column":0},"end":{"row":0,"column":1},"action":"remove","lines":["あ"],"id":5}],[{"start":{"row":33,"column":71},"end":{"row":33,"column":74},"action":"insert","lines":["-->"],"id":6},{"start":{"row":33,"column":20},"end":{"row":33,"column":24},"action":"insert","lines":["<!--"]}],[{"start":{"row":33,"column":75},"end":{"row":33,"column":78},"action":"remove","lines":["-->"],"id":7},{"start":{"row":33,"column":20},"end":{"row":33,"column":24},"action":"remove","lines":["<!--"]}]]},"ace":{"folds":[],"scrolltop":375,"scrollleft":0,"selection":{"start":{"row":33,"column":27},"end":{"row":33,"column":31},"isBackwards":true},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1631584345448,"hash":"c97169cf23f75c0cf6f427c9ec72831c64e9977b"}