@extends('layout.application')

@section('title')
    {{$title}}
@endsection

@section('content')

    <!-- セッションから受け取った、配列に入った連想配列の中身を出力する -->
    <h3>問題の答え</h3>

    <!-- 配列に入った連想配列の中身を出力する -->
    @foreach ($data as $datum)
        <p>
            {{$datum['num_1']}}<br>
            {{$datum['num_2']}}<br>
            -__<br>
            {{$datum['num_result']}}<br>
        </p>
    @endforeach
@endsection