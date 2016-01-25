<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>@yield('title')</title>
    <!-- normalizar -->
    <link href="{{ URL::asset('asset/css/normalize.css') }}" rel="stylesheet">


    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Cabin:400,500,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>


    <!-- Bootstrap -->
    <link href="{{ URL::asset('asset/css/bootstrap.min.css') }}" rel="stylesheet">

    <!--fontawesome-->
    <link href="{{ URL::asset('asset/css/font-awesome.min.css') }}" rel="stylesheet">

    <!--animation-->
    <link href="{{ URL::asset('asset/css/animate.min.css') }}" rel="stylesheet">

    <!--main css-->

    <link href="{{ URL::asset('asset/css/style.css') }}" rel="stylesheet">

    <!--main css-->
    <link href="{{ URL::asset('asset/css/responsive.css') }}" rel="stylesheet">

    <!-- Form Style -->
    <link href="{{ URL::asset('asset/css/form_style.css') }}" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div id="preloader">
        <i class="fa fa-spinner fa-pulse fa-3x fa-fw margin-bottom"></i>
    </div>
    
    <header id="header_area">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="logo">
                        <h2><a href="http://zavelop.dev"><b>ZAVELOP</b> Technology</a></h2>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="mainmenu">
                        <div class="navbar navbar-nobg">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>

                            <div class="navbar-collapse collapse">
                            <ul class="nav navbar-nav navbar-right">
							{!! csrf_field() !!}
                            @foreach($dataMenu as $row)
									<li><a href="{{$row->url}}">{{$row->menu}}</a></li>
							@endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="row">
                <div class="col-md-12">
                    <div class="header_area_text">
                        <h2 class="wow slideInDown" data-wow-duration="2s">We’re here to create your
online presense and style</h2>
                        <p class="wow slideInUp">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse mattis orci dapibus risus dignissim, viverra pellentesque arcu ullamcorper. Mauris a tincidunt lectus. Proin nec venenatis quam. </p>
                        <a class="wow slideInUp" data-wow-duration="2s" href="">START  TODAY  with  us</a>
                    </div>
                </div>
            </div> -->
        </div>
    </header>
    <!-- end header top area -->


    @yield('content')


    <footer id="footer_area">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="company_logo wow slideInDown">
                        <h2>ZAVELOP Technology</h2>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="company_address wow slideInDown">
                        <h2>New York</h2>
                        <p>Address goes here in a one or two lines, maybe lorem ipsum
                        </p>
                        <h3>
                            +44 800 800 90
                            info@domen.com </h3>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="company_address wow slideInDown">
                        <h2>london</h2>
                        <p>Address goes here in a one or two lines, maybe lorem ipsum
                        </p>
                        <h3>
                            +44 800 800 90
                            info@domen.com </h3>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="company_address wow slideInDown">
                        <h2>madrid</h2>
                        <p>Address goes here in a one or two lines, maybe lorem ipsum
                        </p>
                        <h3>
                            +44 800 800 90
                            info@domen.com </h3>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- main jQuery-->
    <script src="{{ URL::asset('asset/js/jquery-1.11.3.min.js') }}"></script>

    <!-- bootstrap js -->
    <script src="{{ URL::asset('asset/js/bootstrap.min.js') }}"></script>

    <!-- wow js -->
    <script src="{{ URL::asset('asset/js/wow.min.js') }}"></script>
    <script>
        new WOW().init();
    </script>

    <!-- main js -->
    <script src="{{ URL::asset('asset/js/main.js') }}"></script>

</body>

</html>