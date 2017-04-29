
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>  
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><i class='fa fa-linux'></i> CONCLOUD - (Containers Cloud Computing)</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-left">
       @if (Route::has('login'))
         @if (Auth::check())
         <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Image<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Create</a></li>
            <li><a href="{{ url('/imagelist') }}">List</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Container<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Create</a></li>
            <li><a href="{{ url('/conlist') }}">List</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Cpanel<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="{{ url('/home') }}">Upload</a></li>
            <li><a href="{{URL::to('/')}}">List</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">{{Auth::user()->name}}<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Profil</a></li>
            <li><a href="#">Setting</a></li>
            <li class="divider"></li>
            <li><a href="{{URL::to('/logout')}}"></i>Logout</a></li>
          </ul>
        </li>
        @else
        <li><a href="{{ url('/login') }}"></i>Login</a></li>
        <li><a href="{{ url('/register') }}"></i>Register</a></li>
        @endif
      @endif
    </ul>
  </div>
</div>
</nav>