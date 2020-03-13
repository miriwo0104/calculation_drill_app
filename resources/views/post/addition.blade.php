@extends('layout.application')

@section('title')
    足し算の問題出力
@endsection

@section('content')

    <!-- 計算問題の出力(答え無し) -->
    <h3>計算問題</h3>
    <a href="/post/addition/answer">
        <button type="button">答えを表示する</button>
    </a>
    <!-- 配列の初期化 -->
    <?php $num_1_array = []; ?>
    <?php $num_2_array = []; ?>
    
    <!-- for文の条件指定 10問出題したいので<=10に設定 -->
    @for ($i = 1; $i <= 10; $i++)
    
        <!-- 問題数を出力 -->
        <h4>{{$i}}</h4>
    
        <!-- 1~99までの乱数を二つ生成 -->
        <?php $num_1 = random_int(1, 99); ?>
        <?php $num_2 = random_int(1, 99); ?>
    
        <!-- 生成された乱数を足した値を変数$num_totalに格納 -->
        <?php $num_total = $num_1 + $num_2; ?>
    
        <!-- num_1の乱数をそれぞれ配列に格納 -->
        @if (isset($num_1_array[0]))
        
        <!-- 配列の0番目に値が格納されている場合、末尾に追加 -->
        <?php array_push($num_1_array, $num_1); ?>
        @else
        <!-- 配列の0番目に値が格納されていない場合、最初の値として追加 -->
        <?php $num_1_array = [$num_1]; ?>
        @endif
    
        <!-- num_2の乱数をそれぞれ配列に格納 -->
        @if (isset($num_2_array[0]))
        <?php array_push($num_2_array, $num_2); ?>
        @else
        <?php $num_2_array = [$num_2]; ?>
        @endif
    
        <!-- num_totalの値をそれぞれ配列に格納 -->
        @if (isset($num_total_array[0]))
        <?php array_push($num_total_array, $num_total); ?>
        @else
        <?php $num_total_array = [$num_total]; ?>
        @endif
    
        <!-- 計算式の出力 -->
        <p>
          {{$num_1}}<br>
          {{$num_2}}<br>
        +__<br>
        </p>
    @endfor
    
    <!-- 確認用そのうち消す -->
    <?php var_dump($num_1_array); ?><br>
    <?php var_dump($num_2_array); ?><br>
    <?php var_dump($num_total_array); ?><br>
    
    <!-- 各配列を一括管理するための配列に格納する -->
    <?php $contents_array = [$num_1_array, $num_2_array, $num_total_array]; ?>
    <?php var_dump($contents_array); ?>
@endsection