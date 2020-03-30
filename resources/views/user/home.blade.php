@extends('layouts.application')

@section('content')
    <h1>これはユーザホームです</h1>
    @php
        echo $user_id;
        echo $user_name;
    @endphp
@endsection