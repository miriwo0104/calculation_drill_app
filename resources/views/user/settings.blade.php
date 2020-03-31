@extends('layouts.application')

@section('content')
    <h1>ユーザの設定画面です</h1>
    <form method="POST" action="/user/settings">
        @csrf
        <h4>足し算の有効化</h4>
        <select name="addition_boolean">
            <option value=1>ON</option>
            <option value=0>OFF</option>
        </select>
        <h4>引き算の有効化</h4>
        <select name="subtraction_boolean">
            <option value=1>ON</option>
            <option value=0>OFF</option>
        </select>
        <h4>掛け算の有効化</h4>
        <select name="multiplication_boolean">
            <option value=1>ON</option>
            <option value=0>OFF</option>
        </select>
        <br>
        <input type="submit">
    </form>
@endsection