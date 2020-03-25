@extends('layout.pdf')

@section('title')
    足し算
@endsection

@section('content')

    <!-- 配列に入った連想配列の中身を出力する -->
    @foreach ($data as $datum)
        <p>
            {{$datum['num_1']}}<br>
            {{$datum['num_2']}}<br>
            +__<br>
        </p>
    @endforeach
    <p>
        答え
    </p>
    @foreach ($data as $datum)
        <p>
            {{$datum['num_1']}}<br>
            {{$datum['num_2']}}<br>
            +__<br>
            {{$datum['num_result']}}<br>
        </p>
    @endforeach
@endsection