<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>
    <header>
       @yield('header')
    </header>
    <main>
        <div class="title">
            <h1>@yield('title')</h1>
        </div>
        <div class="content">
            @yield('content')
        </div>
    <footer>
        @yield('footer')
    </footer>
    </main>
</body>
</html>