@extends('layouts.application')

@section('content')
    <h1>ユーザの設定画面です</h1>
    <h4>足し算の有効化</h4>
    <select name="example">
        <option value="選択肢1">ON</option>
        <option value="選択肢2">OFF</option>
    </select>
    <h4>引き算の有効化</h4>
    <select name="example">
        <option value="選択肢1">ON</option>
        <option value="選択肢2">OFF</option>
    </select>
    <h4>掛け算の有効化</h4>
    <select name="example">
        <option value="選択肢1">ON</option>
        <option value="選択肢2">OFF</option>
    </select>
@endsection