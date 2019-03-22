<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/app.css" />
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
</head>
<body>
<div class="container">
    <header class="row">
        @include('includes.header')
    </header>
    <article class="row">
        @yield('content')
    </article>
    <footer class="row">
        @include('includes.footer')
    </footer>
</div>

</body>
</html>
