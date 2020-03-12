@extends('layout.application')

@section('title')
    計算問題出力
@endsection

@section('header')
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/">計算問題集</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
      </ul>
    </div>
  </nav>
@endsection

@section('content')

    <!-- 計算問題の出力(答え無し) -->
    <h3>計算問題</h3>
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

    <!-- 計算問題の出力(答え有り) -->
    <h3>計算問題の回答</h3>
    
    @foreach ($num_total_array as $ans)
        <?php echo $ans; ?>
    @endforeach
@endsection

@section('footer')
    <p>footerです</p>
@endsection

