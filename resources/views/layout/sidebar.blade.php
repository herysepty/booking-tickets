	<div class="row sidebar-reservas-hs">
		<h4 class="text-center"><span class="glyphicon glyphicon-pencil"></span> Reservation</h4>
		<form class="form-horizontal form-signup" role="form" method="post" action="" novalidate="novalidate"> 
			<input type="hidden" name="_token" value="{{csrf_token()}}">
			
			<div class="form-group"> 
				<div class="row" style="margin:0px 20px">
					<label for="">Check in</label>
				</div>
				<div class="row" style="margin:0px 0px">
					<div class="col-xs-5">
						<select class="form-control input-sm"> 
							@for($i=1; $i<=31; $i++)
								<option>{!!$i!!}</option> 
							@endfor
						</select>
					</div>
					<div class="col-xs-7">
						<select class="form-control input-sm"> 
							<option>Jan</option>
							<option>Feb</option>
							<option>Mar</option>
							<option>Apr</option>
							<option>Mei</option>
							<option>Jun</option>
							<option>Jul</option>
							<option>Ags</option>
							<option>Sep</option>
							<option>Okt</option>
							<option>Nov</option>
							<option>Des</option>
						</select>
					</div>
					<span class="text-danger">{{ $errors->first('jenis_kamar')}}</span>
				</div>
			</div> 
			<div class="form-group"> 
				<div class="row" style="margin:0px 20px">
					<label for="">Check out</label>
				</div>
				<div class="row" style="margin:0px 0px">
					<div class="col-xs-5">
						<select class="form-control input-sm"> 
							@for($i=1; $i<=31; $i++)
								<option>{!!$i!!}</option> 
							@endfor
						</select>
					</div>
					<div class="col-xs-7">
						<select class="form-control input-sm"> 
							<option>Jan</option>
							<option>Feb</option>
							<option>Mar</option>
							<option>Apr</option>
							<option>Mei</option>
							<option>Jun</option>
							<option>Jul</option>
							<option>Ags</option>
							<option>Sep</option>
							<option>Okt</option>
							<option>Nov</option>
							<option>Des</option>
						</select>
						<span class="text-danger">{{ $errors->first('jenis_kamar')}}</span>
					</div>
					
				</div>
			</div>
									
			<div class="form-group pull-right" style="margin:0px 0px">
					<input class="btn btn-primary btn-sm" type="submit" value="Cek Kamar" name="btn_tambah">
			</div>
		</form>
	</div>
	<div class="row sidebar-menu-hs">
		<h4 class="text-center">MENU ADMIN</h4>
		<ul class="nav nav-pills nav-stacked">
			<li><a href="{{ URL('user') }}"><span class="glyphicon glyphicon-minus"></span> User <span class="badge pull-right"></span></a></li> 
            <li><a href="{{ URL('category') }}"><span class="glyphicon glyphicon-minus"></span> Category <span class="badge pull-right"></span></a></li> 
            <li><a href="{{ URL('article') }}"><span class="glyphicon glyphicon-minus"></span> Article <span class="badge pull-right"></span></a></li> 
            </li>
		</ul>
	</div>
	<div class="row sidebar-social-hs">
		<h4 class="text-center sidebar-head">Follow Me on Social Media</h4>
		<div class="col-xs-3">
          <a href="http://www.facebook.com/herysepty"><img src="{{ URL('assets/images/icon-social/facebook.png') }}" class="img-responsive text-center" alt="Responsive image"></a>
        </div>
        <div class="col-xs-3">
          <a href="http://www.twitter.com/herysepty"><img src="{{ URL('assets/images/icon-social/twitter.png') }}" class="img-responsive text-center" alt="Responsive image"></a>
        </div>
        <div class="col-xs-3">
          <a href="http://www.youtube.com/TheGizue"><img src="{{ URL('assets/images/icon-social/youtube.png') }}" class="img-responsive text-center" alt="Responsive image"></a>
        </div>
        <div class="col-xs-3">
          <a href="http://www.instagram.com/herysepty"><img src="{{ URL('assets/images/icon-social/instagram.png') }}" class="img-responsive text-center" alt="Responsive image"></a>
        </div>
	</div>
	<div class="row">
		@yield('sidebar')
	</div>

