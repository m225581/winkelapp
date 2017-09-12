<div id="navbar">
  <nav class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">Het Beginstation</a>
    </div>
    <div class="collapse navbar-collapse" id="navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="/">Home</a></li>
        <li class="dropdown">
          <a href="/kleding" class="dropdown-toggle" data-toggle="dropdown">Kleding <b class="caret"></b></a> 
          <ul class="dropdown-menu">
            <li class="dropdown dropdown-submenu">
              <a href="/kleding-mannen" class="dropdown-toggle" data-toggle="dropdown">Mannen Kleding</a>
              <ul class="dropdown-menu">
                <li class="kopie"><a href="/kleding-mannen">Mannen Kleding</a></li>
                <li><a href="#">Truien</a></li>
                <li><a href="#">T-shirts</a></li>
                <li><a href="#">Broeken</a></li>
                <li><a href="#">Onderbroeken</a></li>
              </ul>
            </li>
            <li class="dropdown dropdown-submenu">
              <a href="/kleding-vrouwen" class="dropdown-toggle" data-toggle="dropdown">Vrouwen Kleding</a>
              <ul class="dropdown-menu">
                <li class="kopie"><a href="/kleding-vrouwen">Vrouwen Kleding</a></li>
                <li><a href="#">Truien</a></li>
                <li><a href="#">T-shirts</a></li>
                <li><a href="#">Broeken</a></li>
                <li><a href="#">Onderbroeken</a></li>
              </ul>
            </li>
           <li class="dropdown dropdown-submenu">
              <a href="/kleding-kinderen" class="dropdown-toggle" data-toggle="dropdown">KinderKleding</a>
              <ul class="dropdown-menu">
                <li class="kopie"><a href="/kleding-kinderen">Kinder Kleding</a></li>
                <li><a href="#">Truien</a></li>
                <li><a href="#">T-shirts</a></li>
                <li><a href="#">Broeken</a></li>
                <li><a href="#">Onderbroeken</a></li>
              </ul>
            </li>
            <li class="dropdown dropdown-submenu">
              <a href="/kleding-sport" class="dropdown-toggle" data-toggle="dropdown">Sport</a>
              <ul class="dropdown-menu">
                <li class="kopie"><a href="/kleding-sport">Sport</a></li>
                <li><a href="#">Voetbal</a></li>
                <li><a href="#">Basketbal</a></li>
                <li><a href="#">Rugby</a></li>
                <li><a href="#">Fietsen</a></li>
              </ul>
            </li>
            <li class="dropdown dropdown-submenu">
              <a href="/kleding-babies" class="dropdown-toggle" data-toggle="dropdown">Baby Kleding</a>
              <ul class="dropdown-menu">
                <li class="kopie"><a href="/kleding-babies">Baby Kleding</a></li>
                <li><a href="#">Truien</a></li>
                <li><a href="#">T-shirts</a></li>
                <li><a href="#">Broeken</a></li>
                <li><a href="#">Onderbroeken</a></li>
                <li class="dropdown dropdown-submenu">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown Submenu Link 5.4</a>
                  <ul class="dropdown-menu">
                    <li class="kopie"><a href="#">Dropdown Submenu Link 5.4</a></li>
                    <li><a href="#">Dropdown Submenu Link 5.4.1</a></li>
                    <li><a href="#">Dropdown Submenu Link 5.4.2</a></li>
                  </ul>
                </li>
              </ul>
            </li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown2 <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li class="kopie"><a href="#">Dropdown2</a></li>
            <li><a href="#">Dropdown2 Link 1</a></li>
            <li><a href="#">Dropdown2 Link 2</a></li>
            <li><a href="#">Dropdown2 Link 3</a></li>
            <li class="dropdown dropdown-submenu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown2 Link 4</a>
              <ul class="dropdown-menu">
                <li class="kopie"><a href="#">Dropdown2 Link 4</a></li>
                <li><a href="#">Dropdown2 Submenu Link 4.1</a></li>
                <li><a href="#">Dropdown2 Submenu Link 4.2</a></li>
                <li><a href="#">Dropdown2 Submenu Link 4.3</a></li>
                <li><a href="#">Dropdown2 Submenu Link 4.4</a></li>
              </ul>
            </li>
            <li class="dropdown dropdown-submenu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown2 Link 5</a>
              <ul class="dropdown-menu">
                <li class="kopie"><a href="#">Dropdown Link 5</a></li>
                <li><a href="#">Dropdown2 Submenu Link 5.1</a></li>
                <li><a href="#">Dropdown2 Submenu Link 5.2</a></li>
                <li><a href="#">Dropdown2 Submenu Link 5.3</a></li>
                <li class="dropdown dropdown-submenu">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown Submenu Link 5.4</a>
                  <ul class="dropdown-menu">
                    <li class="kopie"><a href="#">Dropdown2 Submenu Link 5.4</a></li>
                    <li><a href="#">Dropdown2 Submenu Link 5.4.1</a></li>
                    <li><a href="#">Dropdown2 Submenu Link 5.4.2</a></li>
                  </ul>
                </li>
              </ul>
            </li>
          </ul>
        </li>
<li><a href="/winkelwagen">Winkelwagen</a></li>
<li><a href="/contacten">Contacten</a></li>
      </ul>
    <ul class="nav navbar-nav navbar-right">
      <li class="{{Request::is ('login') ? 'active' : ''}}"><a href="/login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      <li class="{{Request::is ('register') ? 'active' : ''}}"><a href="/register"><span class="glyphicon glyphicon-user"></span> register</a></li>
    </ul>
    </div>
    <!-- /.navbar-collapse -->
  </nav>
</div>