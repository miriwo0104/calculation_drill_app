<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="/">計算問題集</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/post/addition">足し算<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/post/subtraction">引き算</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/post/multiplication">掛け算</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
        <div class="title">
            <h1>@yield('title')</h1>
        </div>
        <div class="content">
            @yield('content')
        </div>
    <footer>
        <ul class="nav justify-content-center">
            <li class="nav-item">
                footer
            </li>
        </ul>
    </footer>
    </main>
</body>
</html>