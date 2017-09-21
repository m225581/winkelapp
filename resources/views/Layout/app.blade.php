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
        @include('inc.Actiezone')
        @endif
        @if(Request::is('kleding'))
        @include('inc.keuzemenu')
        @endif
        @if(Request::is('photo'))
        @include('inc.photoAdd')
        @endif
        @if(Request::is('upload'))
        @include('inc.upload')
        @endif
        @if(Request::is('instellingen'))
        @include('inc.instellingenmenu')
        @endif
        </div>
        <footer id="footer" class="text-center">
        <p>Copyright 2017 &copy; Beginstation</p>
        </footer>
    </body>
</html>