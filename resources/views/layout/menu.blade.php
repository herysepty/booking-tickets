<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Booking ticket Online</a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li class="active"><a href="{{ URL('/') }}">Home</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
                  @if (Auth::check())
                      <li><a href="/auth/logout"><span class="glyphicon glyphicon-log-out"></span> logout</a></li>
                  @else
                     <li><a href="{{ URL('login') }}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                     <li><a href="{{ URL('register') }}"><span class="glyphicon glyphicon-log-out"></span> Register</a></li>
                  @endif
        <!--   <li class="active"><a href="./">Fixed top <span class="sr-only">(current)</span></a></li> -->
        </ul>
      </div><!--/.nav-collapse -->
    </div>
</nav>