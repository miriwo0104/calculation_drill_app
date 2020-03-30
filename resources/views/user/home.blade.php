@extends('layouts.application')

@section('content')
    <h1>これはユーザホームです</h1>
    @php
        echo $user_id;
        echo $user_name;
        echo $addition_boolean;
        echo $subtraction_boolean;
        echo $multiplication_boolean;
    @endphp
    @if ($addition_boolean = 1)
    <a href="/output/addition">
        <button type="button" class="btn btn-success btn-lg">足し算の問題を表示</button>
    </a>
    @endif
    @if ($subtraction_boolean = 1)
    <a href="/output/subtraction">
        <button type="button" class="btn btn-success btn-lg">引き算の問題を表示</button>
    </a>
    @endif
    @if ($multiplication_boolean = 1)
    <a href="/output/multiplication">
        <button type="button" class="btn btn-success btn-lg">掛け算の問題を表示</button>
    </a>
    @endif
@endsection