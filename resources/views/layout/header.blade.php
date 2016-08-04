@include('layout.menu')
<div class="jumbotron">
  <h1>Booking</h1>
  <p class="lead">Tickets Online</p>
  <p><a class="btn btn-lg btn-success" href="{{ URL('register') }}" role="button">Register now !!!</a></p>
</div>

<div class="row" style="margin-left:8px; margin-bottom:20px;">
  <ul class="nav nav-pills"> 
    <li class="active"><a href="{{ URL('/about') }}"><span class="glyphicon glyphicon-home"></span></a></li> 
    <li><a href="{{ URL('booking/add') }}">Booking</a></li>
    <li><a href="{{ URL('about') }}">About</a></li>
    <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="#"> Java <span class="caret"></span> </a> 
      <ul class="dropdown-menu"> 
        <li><a href="#">Swing</a></li> 
        <li><a href="#">jMeter</a></li> 
        <li><a href="#">EJB</a></li> 
        <li class="divider"></li> 
        <li><a href="#">Separated link</a></li> 
      </ul> 
    </li> 
    <form class="navbar-form navbar-right" role="search" method="get" action="">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Enter Keyword" name="key">
              </div>
              <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
           </form>
  </ul> 
</div>