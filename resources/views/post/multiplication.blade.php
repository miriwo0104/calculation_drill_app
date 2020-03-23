@extends('layout.application')

@section('title')
    {{$title}}
@endsection

@section('content')

    <!-- 配列に入った連想配列の中身を出力する -->
    <h3>計算問題</h3>
    <a href="/post/multiplication/answer">
        <button type="button">答えを表示する</button>
    </a>
    <a href="/pdf_output/multiplication">
        <button type="button">問題をPDF出力する</button>
    </a>
    
    @foreach ($data as $datum)
    <p>
        {{$datum['num_1']}}<br>
        {{$datum['num_2']}}<br>
        ×__<br>
    </p>
    @endforeach
@endsection