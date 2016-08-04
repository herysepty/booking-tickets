<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ URL('assets/img/favicon.png')}}">
    <title> @herysepty - @yield('title_web')</title>

    {!! HTML::style('assets/css/bootstrap.min.css') !!}

    {!! HTML::style('assets/css/admin/sb-admin.css') !!}
    {!! HTML::style('assets/css/admin/plugins/morris.css') !!}
    {!! HTML::style('assets/fonts/admin/css/font-awesome.min.css') !!}
  </head>
<body>  
   <div id="wrapper">
      @include('layout.admin_nav')

      <div id="page-wrapper">
        <div class="container-fluid">
          <!-- Page Heading -->
          <div class="row">
              <div class="col-lg-12">
                  <h1 class="page-header"><span  class="@yield('title_icon')"></span> @yield('title_content')<small> @yield('title_content_small')</small>
                  </h1>
                  <ol class="breadcrumb">
                      <li class="active">
                          <i class="fa fa-dashboard"></i> {{ date('d M Y')}} / @yield('title_breadcrumb')
                      </li>
                  </ol>
              </div>
          </div>

          @yield('content')

          <div class="row" style="margin-top:100px;">
            <footer class="footer">
                  <div class="col-sm-11">
                    <p class="text-center">Copyright 2015 for <a href="">Hery's Official Website</a> By <a href="http://twitter.com/herysepty">@herysepty</a> Support By Bootstrap and Laravel</p>
                  </div>
                  <div class="col-sm-1">
                  <span class="visible-xs navbar-text">Smartphones</span> 
                  <span class="visible-sm navbar-text">Tablets</span> 
                  <span class="visible-md navbar-text">Laptops</span> 
                  <span class="visible-lg navbar-text">PC</span> 
                </div>
            </footer>
          </div>
          
        </div>
            <!-- /.container-fluid -->
      </div>
        <!-- /#page-wrapper -->
  </div>

    {!! HTML::script('assets/js/jquery-1.11.1.min.js') !!}

    @yield('script_js')
    
    {!! HTML::script('assets/js/bootstrap.min.js') !!}

    {!! HTML::script('assets/js/admin/plugins/morris/raphael.min.js') !!}
    {!! HTML::script('assets/js/admin/plugins/morris/morris.min.js') !!}
    {!! HTML::script('assets/js/admin/plugins/morris/morris-data.js') !!}
    
  </body>
</html>
