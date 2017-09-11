<nav class="navbar navbar-inverse">
    <div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle= "collapse">
        <span class="sr-only">toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        </button>
    <a class="navbar-brand" href="#">Acme</a>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
    <ul class="nav navbar-nav">
        <li class="{{Request::is ('/') ? 'active' : ''}}"><a href="/">Home</a></li>
        <li class="{{Request::is ('kleding') ? 'active' : ''}}"><a href="/kleding">Kleding</a></li>
        <li class="{{Request::is ('winkelwagen') ? 'active' : ''}}"><a href="/winkelwagen">Winkelwagen</a></li>
        <li class="{{Request::is ('contacten') ? 'active' : ''}}"><a href="/contacten">contacten</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li class="{{Request::is ('register') ? 'active' : ''}}"><a href="/register"><span class="glyphicon glyphicon-user"></span> register</a></li>
      <li class="{{Request::is ('log_in') ? 'active' : ''}}"><a href="/log_in"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
    </div>
</nav>