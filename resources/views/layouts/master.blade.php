<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/app.css" />
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <script src="{{ asset('js/scripts.js') }}"></script>
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
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB8qvjC56mFsNL90L2x_FLSuWOpbcvZm7w&callback=initMap"
type="text/javascript"></script>
</body>
</html>
