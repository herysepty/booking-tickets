<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/">Booking Ticket Online</a>
    </div>
    <ul class="nav navbar-left top-nav">
        <li><a href="{{ URL('about') }}"> About</a></li>
    </ul>
    <!-- Top Menu Items -->
    <ul class="nav navbar-right top-nav">
        @if (Auth::check())
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> {!! Auth::user()->firstname !!}  {!!Auth::user()->lastname !!} <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li>
                    <a href="{!! URL('user/change-password') !!}"><i class="fa fa-fw fa-gear"></i> Settings</a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="{{ URL('/auth/logout') }}"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                </li>
            </ul>
        </li>
        @else
             <li><a href="{{ URL('login') }}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
             <li><a href="{{ URL('register') }}"><span class="glyphicon glyphicon-log-out"></span> Register</a></li>
          @endif
    </ul>
    <!--  -->
    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <div class="row">
            
        </div>
        <div class="row">
            <ul class="nav navbar-nav side-nav">
                <li class="active">
                    <a href="{{ URL('/') }}"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                </li>
                <li>
                    <a href="javascript:;" data-toggle="collapse" data-target="#menu_admin"><i class="fa fa-fw  fa-users"></i> User <i class="fa fa-fw fa-caret-down"></i></a>
                    <ul id="menu_admin" class="collapse">
                        <li><a href="{{ URL('user') }}"><span class="glyphicon glyphicon-minus"></span> Show User <span class="badge pull-right"></span></a></li> 
                        <li><a href="{{ URL('user/add') }}"><span class="glyphicon glyphicon-minus"></span> Add User <span class="badge pull-right"></span></a></li> 
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" data-toggle="collapse" data-target="#menu_ticket_type"><i class="fa fa-fw fa-ticket"></i> Ticket Type <i class="fa fa-fw fa-caret-down"></i></a>
                    <ul id="menu_ticket_type" class="collapse">
                        <li><a href="{{ URL('ticket-type') }}"><span class="glyphicon glyphicon-minus"></span> Show Ticket Type <span class="badge pull-right"></span></a></li> 
                        <li><a href="{{ URL('ticket-type/add') }}"><span class="glyphicon glyphicon-minus"></span> Add Ticket Type <span class="badge pull-right"></span></a></li> 
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" data-toggle="collapse" data-target="#menu_payment"><i class="fa fa-fw fa-cc-visa"></i> Payment <i class="fa fa-fw fa-caret-down"></i></a>
                    <ul id="menu_payment" class="collapse">
                        <li><a href="{{ URL('payment') }}"><span class="glyphicon glyphicon-minus"></span> Show Payment <span class="badge pull-right"></span></a></li> 
                        <li><a href="{{ URL('payment/add') }}"><span class="glyphicon glyphicon-minus"></span> Add Payement <span class="badge pull-right"></span></a></li> 
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" data-toggle="collapse" data-target="#menu_venue"><i class="fa fa-fw fa-arrows-v"></i> Venue <i class="fa fa-fw fa-caret-down"></i></a>
                    <ul id="menu_venue" class="collapse">
                        <li><a href="{{ URL('venue') }}"><span class="glyphicon glyphicon-minus"></span> Show Venue <span class="badge pull-right"></span></a></li> 
                        <li><a href="{{ URL('venue/add') }}"><span class="glyphicon glyphicon-minus"></span> Add Venue <span class="badge pull-right"></span></a></li> 
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" data-toggle="collapse" data-target="#menu_seat"><i class="fa fa-fw fa-wheelchair"></i> Seat <i class="fa fa-fw fa-caret-down"></i></a>
                    <ul id="menu_seat" class="collapse">
                        <li><a href="{{ URL('seat') }}"><span class="glyphicon glyphicon-minus"></span> Show Seat <span class="badge pull-right"></span></a></li> 
                        <li><a href="{{ URL('seat/add') }}"><span class="glyphicon glyphicon-minus"></span> Add Seat <span class="badge pull-right"></span></a></li> 
                    </ul>
                </li>
                <li>
                    <a href="{{ URL('booking') }}" ><i class="fa fa-fw fa-suitcase"></i> List Booking</a>
                </li>
                <li>
                    <a href="{{ URL('booking/add') }}" ><i class="fa fa-fw fa-suitcase"></i> Booking</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- /.navbar-collapse -->
</nav>