{"filter":false,"title":"edit.blade.php","tooltip":"/bbs/resources/views/messages/edit.blade.php","undoManager":{"mark":0,"position":0,"stack":[[{"start":{"row":0,"column":0},"end":{"row":61,"column":11},"action":"insert","lines":["@extends('layouts.app')","@section('title', '投稿編集')","@section('header', 'id: ' .  $message->id . 'の投稿編集')","@section('content')","            <div class=\"row mt-2\">","                <form class=\"col-sm-12\" action=\"/messages/{{ $message->id }}\" method=\"POST\" enctype=\"multipart/form-data\">","                    <!-- CSRF 対策(トークン作成) -->","                    {{ csrf_field() }}","                    <input type=\"hidden\" name=\"_method\" value=\"PUT\">","                    <!-- 1行 -->","                    <div class=\"form-group row\">","                        <label class=\"col-2 col-form-label\">名前</label>","                        <div class=\"col-10\">","                            <input type=\"text\" class=\"form-control\" name=\"name\" value=\"{{ $message->name }}\">","                        </div>","                    </div>","                ","                    <!-- 1行 -->","                    <div class=\"form-group row\">","                        <label class=\"col-2 col-form-label\">タイトル</label>","                        <div class=\"col-10\">","                            <input type=\"text\" class=\"form-control\" name=\"title\" value=\"{{ $message->title }}\">","                        </div>","                    </div>","                    ","                    <!-- 1行 -->","                    <div class=\"form-group row\">","                        <label class=\"col-2 col-form-label\">内容</label>","                        <div class=\"col-10\">","                            <input type=\"text\" class=\"form-control\" name=\"body\" value=\"{{ $message->body }}\">","                        </div>","                    </div>","                    ","                     <div class=\"form-group row\">","                        <label class=\"col-2 col-form-label\">現在の画像</label>","                        <div class=\"col-10\">","                            <img src=\"{{ asset('uploads/' . $message->image) }}\" alt=\"表示する画像がありません。\">","                        </div>","                    </div>","                    ","                    <div class=\"form-group row\">","                        <label class=\"col-2 col-form-label\">画像アップロード</label>","                        <div class=\"col-3\">","                            <input type=\"file\" name=\"image\" accept='image/*' onchange=\"previewImage(this);\">","                        </div>","                        <div class=\"col-7\">","                            <img id=\"preview\" src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" style=\"max-width:200px;\">","                        </div>","                    </div>","                    ","                    <!-- 1行 -->","                    <div class=\"form-group row\">","                        <div class=\"offset-2 col-10\">","                            <button type=\"submit\" class=\"btn btn-primary\">更新</button>","                        </div>","                    </div>","                </form>","            </div>","             <div class=\"row mt-5\">","                <a href=\"/\" class=\"btn btn-primary\">投稿一覧</a>","            </div>","@endsection"],"id":1}]]},"ace":{"folds":[],"scrolltop":150,"scrollleft":0,"selection":{"start":{"row":16,"column":16},"end":{"row":16,"column":16},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1631584629189,"hash":"fc7b982cc6b847279d5052b4f832b793805d2a70"}