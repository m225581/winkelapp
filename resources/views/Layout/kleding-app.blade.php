<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <title>Winkelapp</title>
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        <div class="Banner"></div>
        @include('inc.navbar')
        <div class="Main">
        @if(Request::is('kleding'))
        @include('inc.kleding_page')
        @endif
        @if(Request::is('kleding-mannen'))
        @include('inc.sub_kleding')
        @endif
        @if(Request::is('kleding-vrouwen'))
        @include('inc.sub_kleding')
        @endif
        @if(Request::is('kleding-kinderen'))
        @include('inc.sub_kleding')
        @endif
        @if(Request::is('kleding-babies'))
        @include('inc.sub_kleding')
        @endif
        @if(Request::is('kleding-sport'))
        @include('inc.sub_kleding')
        @endif
        </div>
        <footer id="footer" class="text-center">
        <p>Copyright 2017 &copy; Beginstation</p>
        </footer>
    </body>