<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Winkelapp</title>
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        <div class="Banner"></div>
        @include('inc.navbar')
        <div class="Main">
        @if(Request::is('/'))
        @include('inc.carousel')
        @endif
        </div>
        <footer id="footer" class="text-center">
        <p>Copyright 2017 &copy; Beginstation</p>
        </footer>
    </body>
</html>