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
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Mannen Kleding</a>
              <ul class="dropdown-menu">
                <li class="kopie"><a href="#">Mannen Kleding</a></li>
                <li><a href="#">Truien</a></li>
                <li><a href="#">T-shirts</a></li>
                <li><a href="#">Broeken</a></li>
                <li><a href="#">Onderbroeken</a></li>
              </ul>
            </li>
            <li class="dropdown dropdown-submenu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Vrouwen Kleding</a>
              <ul class="dropdown-menu">
                <li class="kopie"><a href="#">Vrouwen Kleding</a></li>
                <li><a href="#">Truien</a></li>
                <li><a href="#">T-shirts</a></li>
                <li><a href="#">Broeken</a></li>
                <li><a href="#">Onderbroeken</a></li>
              </ul>
            </li>
           <li class="dropdown dropdown-submenu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">KinderKleding</a>
              <ul class="dropdown-menu">
                <li class="kopie"><a href="#">Kinder Kleding</a></li>
                <li><a href="#">Truien</a></li>
                <li><a href="#">T-shirts</a></li>
                <li><a href="#">Broeken</a></li>
                <li><a href="#">Onderbroeken</a></li>
              </ul>
            </li>
            <li class="dropdown dropdown-submenu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sport</a>
              <ul class="dropdown-menu">
                <li class="kopie"><a href="#">Sport</a></li>
                <li><a href="#">Voetbal</a></li>
                <li><a href="#">Basketbal</a></li>
                <li><a href="#">Rugby</a></li>
                <li><a href="#">Fietsen</a></li>
              </ul>
            </li>
            <li class="dropdown dropdown-submenu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown Link 5</a>
              <ul class="dropdown-menu">
                <li class="kopie"><a href="#">Dropdown Link 5</a></li>
                <li><a href="#">Dropdown Submenu Link 5.1</a></li>
                <li><a href="#">Dropdown Submenu Link 5.2</a></li>
                <li><a href="#">Dropdown Submenu Link 5.3</a></li>
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
        
         
        <!-- Authentication Links -->
        
    <ul class="nav navbar-nav navbar-right">  
        
        @guest
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">register</a>

                <ul class="dropdown-menu" role="menu">
                    <div class="container" id="container">
                        <div class="panel-heading">Register</div>

                        <div class="panel-body">
                            <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                                {{ csrf_field() }}

                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label for="name" class="col-md-4 control-label">Name</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                        @if ($errors->has('name'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="password" class="col-md-4 control-label">Password</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control" name="password" required>

                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <button type="submit" class="btn btn-primary">
                                            Register
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Login</a>

                <ul class="dropdown-menu" role="menu">
                    <div class="container" id="container">
                        <div class="panel-heading">Login</div>

                        <div class="panel-body">
                            <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                                {{ csrf_field() }}

                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="password" class="col-md-4 control-label">Password</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control" name="password" required>

                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Onthoud Mij
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-8 col-md-offset-4">
                                        <button type="submit" class="btn btn-primary">
                                            Login
                                        </button>

                                        <a class="btn btn-link" href="{{ route('password.request') }}">Wachtwoord vergeten?</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </ul>


        @else
            <li class="dropdown navbar-right ">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <ul class="dropdown-menu" role="menu">
                    <li>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> Logout </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:none;" >
                            {{ csrf_field() }}
                        </form>
                    </li>
                    
                    <li>
                        <a href="/photo"> Photo Toevoegen </a>
                    </li>
                </ul>
            </li>
        @endguest
          
    </ul>
        
        
    </div>
    <!-- /.navbar-collapse -->
  </nav>
</div>