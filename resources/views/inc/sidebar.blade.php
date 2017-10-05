@if(Request::is('kleding'))
@section('sidebar')
    <div class="sidebar">
        <ul style="list-style-type:none">
          <li><h1>Kleding</h1></li><br>
          <li><a href="kleding-mannen">Mannen Kleding</a></li>
          <li><a href="kleding-vrouwen">Vrouwen Kleding</a></li>
          <li><a href="kleding-kinderen">Kinder Kleding</a></li>
          <li><a href="kleding-sport">Sport Kleding</a></li>
          <li><a href="kleding-babies">Baby Kleding</a></li>
        </ul>
    </div>
@show
@endif

@if(Request::is('kleding-mannen'))
@section('sidebar')
    <div class="sidebar">
        <ul style="list-style-type:none">
          <li><a href="/kleding"><h1>Mannen Kleding</h1></a></li><br>
          <li><a href="#">Mannen Broeken</a></li>
          <li><a href="#">Mannen T-shirts</a></li>
          <li><a href="#">Mannen Truien</a></li>
          <li><a href="#">Mannen Onderbroeken</a></li>
        </ul>
    </div>
@show
@endif

@if(Request::is('kleding-vrouwen'))
@section('sidebar')
    <div class="sidebar">
        <ul style="list-style-type:none">
          <li><a href="/kleding"><h1>Vrouwen Kleding</h1></a></li><br>
          <li><a href="#">Vrouwen Broeken</a></li>
          <li><a href="#">Vrouwen T-shirts</a></li>
          <li><a href="#">Vrouwen Truien</a></li>
          <li><a href="#">Vrouwen Onderbroeken</a></li>
        </ul>
    </div>
@show
@endif

@if(Request::is('kleding-kinderen'))
@section('sidebar')
    <div class="sidebar">
        <ul style="list-style-type:none">
          <li><a href="/kleding"><h1>Kinder Kleding</h1></a></li><br>
          <li><a href="#">Kinder Broeken</a></li>
          <li><a href="#"> Kinder T-shirts</a></li>
          <li><a href="#">Kinder Truien</a></li>
          <li><a href="#">Kinder Onderbroeken</a></li>
        </ul>
    </div>
@show
@endif

@if(Request::is('kleding-babies'))
@section('sidebar')
    <div class="sidebar">
        <ul style="list-style-type:none">
          <li><a href="/kleding"><h1>Baby Kleding</h1></a></li><br>
          <li><a href="#">Baby Broeken</a></li>
          <li><a href="#">Baby T-shirts</a></li>
          <li><a href="#">Baby Truien</a></li>
          <li><a href="#">Baby Onderbroeken</a></li>
        </ul>
    </div>
@show
@endif

@if(Request::is('kleding-sport'))
@section('sidebar')
    <div class="sidebar">
        <ul style="list-style-type:none">
          <li><a href="/kleding"><h1>Sport Kleding</h1></a></li><br>
          <li><a href="#">Sport Broeken</a></li>
          <li><a href="#">Sport T-shirts</a></li>
          <li><a href="#">Sport Truien</a></li>
          <li><a href="#">Sport Onderbroeken</a></li>
        </ul>
    </div>
@show
@endif