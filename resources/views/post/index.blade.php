<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>postページ</title>
</head>
<body>
    <header>
    </header>
    <main>
    <h1>筆算の問題を出力します</h1>
    @for($i = 1; $i <= 10; $i++)
        <h4>{{$i}}</h4>
    @endfor
    </main>
    <footer>
    </footer>
</body>
</html>