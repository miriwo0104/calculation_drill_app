<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>@yield('title')</title>
    <style>
        body {
        font-family: ipag;
        }
    </style>
</head>
<body>
    <main>
        <div class="title">
            <p>@yield('title')</p>
        </div>
        <div class="content">
            @yield('content')
        </div>
    </main>
</body>
</html>