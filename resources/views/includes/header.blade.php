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
      <ul class="nav navbar-nav">
             @if (Route::has('login'))
                  @if (Auth::check())
                    <li><a href="{{ url('/home') }}"></i>Home</a></li>
                    <li><a href="{{URL::to('/')}}"></i>Home</a></li>
                    <li><a href="{{URL::to('/about')}}"></i>About</a></li>
                    <li><a href="{{URL::to('/logout')}}"></i>Logout</a></li>
                  @else
                    <li><a href="{{ url('/login') }}"></i>Login</a></li>
                    <li><a href="{{ url('/register') }}"></i>Register</a></li>
                  @endif
                </div>
            @endif
      </ul>



    </div>
  </div>
</nav>