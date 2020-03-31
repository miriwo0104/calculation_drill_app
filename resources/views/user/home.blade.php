@extends('layouts.application')

@section('content')
    <h1>これはユーザホームです</h1>
    <h4>ユーザID</h4>
    <p>{{$user_id}}</p>
    <h4>ユーザ名</h4>
    <p>{{$user_name}}</p>

    @php
        echo $addition_boolean;
        echo $subtraction_boolean;
        echo $multiplication_boolean;
    @endphp

    <br>
    @if ($addition_boolean == 1)
        <a href="/output/addition">
            <button type="button" class="btn btn-success btn-lg">足し算の問題を表示</button>
        </a>
    <br>
    @endif
    @if ($subtraction_boolean == 1)
        <a href="/output/subtraction">
            <button type="button" class="btn btn-success btn-lg">引き算の問題を表示</button>
        </a>
    <br>
    @endif
    @if ($multiplication_boolean == 1)
        <a href="/output/multiplication">
            <button type="button" class="btn btn-success btn-lg">掛け算の問題を表示</button>
        </a>
    <br>
    @endif
        <a href="/user/settings">
            <button type="button" class="btn btn-light btn-lg">設定</button>
        </a>
    <br>
@endsection