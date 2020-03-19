@extends('layout.application')

@section('title')
    <?php $title ?>
@endsection

@section('content')

    <!-- 計算問題の出力(答え無し) -->
    <h3>計算問題</h3>
    <a href="/post/addition/answer">
        <button type="button">答えを表示する</button>
    </a>
    
    <!-- for文の条件指定 10問出題したいので<=10に設定 -->

    @foreach ($data as $datum)
        <p>
            {{$datum['num_1']}}<br>
            {{$datum['num_2']}}<br>
        +__<br>
    @endforeach
@endsection