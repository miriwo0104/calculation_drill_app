@extends('layout.application')

@section('title')
    計算問題出力
@endsection

@section('content')

<p>このサービスでは筆算の問題をランダムで出力することができます。</p>
<a href="/login">
    <button type="button" class="btn btn-primary btn-lg">ログイン</button>
</a>
<a href="/register">
    <button type="button" class="btn btn-success btn-lg">新規登録</button>
</a>

@endsection