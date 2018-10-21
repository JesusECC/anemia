<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="{{asset('img/apple-icon.png')}}">
	<link rel="icon" type="image/png" sizes="96x96" href="{{asset('img/favicon.png')}}">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Paper Dashboard by Creative Tim</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="{{asset('css/animate.min.css')}}" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="{{asset('css/paper-dashboard.css')}}" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{asset('css/demo.css')}}" rel="stylesheet" />


    <!--  Fonts and icons     -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="{{asset('css/themify-icons.css')}}" rel="stylesheet">

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-background-color="white" data-active-color="danger">

    <!--
		Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
		Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
	-->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text">
                    Creative Tim
                </a>
            </div>
    <script>
/*$(function() {
  $('nav a[href^="/' + location.pathname.split("/")[1] + '"]').addClass('active');
});*/
    </script>
            <ul class="nav">

                <li class="active">
                    <a href="{{url('empleados')}}">

                <li >
                    <a href="{{route('persona')}}" >

                        <div>
                           <img src="{{asset('img/maternity.png')}}" alt="" class="img-responsive" style="float: left;margin-right: 5px;">
                            <p>Madres</p> 
                        </div>
                        
                    </a>
                </li>
                <li >
                    <a href="{{route('alimentos-index')}}" >                       
                        <div>
                           <img src="{{asset('img/diet.png')}}" alt="" class="img-responsive" style="float: left;margin-right: 5px;">
                            <p>Alimentos</p> 
                        </div>
                    </a>
                </li>
                <li >
                    <a href="{{ route('lista-list') }}" class="menu">
                        <i class="ti-view-list-alt"></i>
                        <p>Lista alimentos</p>
                    </a>
                </li>
                <li id="CargaMasiva">
                    <a href="typography.html">
                        <i class="ti-text"></i>
                        <p>Typography</p>
                    </a>
                </li>
                <li id="CargaMasiva">
                    <a href="icons.html">
                        <i class="ti-pencil-alt2"></i>
                        <p>Icons</p>
                    </a>
                </li>
                <li id="CargaMasiva">
                    <a href="maps.html">
                        <i class="ti-map"></i>
                        <p>Maps</p>
                    </a>
                </li>
                <li id="CargaMasiva">
                    <a href="notifications.html">
                        <i class="ti-bell"></i>
                        <p>Notifications</p>
                    </a>
                </li>
				<li class="active-pro">
                    <a href="upgrade.html">
                        <i class="ti-export"></i>
                        <p>Upgrade to PRO</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <a class="navbar-brand" href="#">Dashboard</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="{{asset('img/bell.png')}}" alt="" style="float: left;margin-right: 5px;">
                                    <p class="notification">5</p>
									<p>Notificaciones</p>
									<b class="caret"></b>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Notification 1</a></li>
                                <li><a href="#">Notification 2</a></li>
                                <li><a href="#">Notification 3</a></li>
                                <li><a href="#">Notification 4</a></li>
                                <li><a href="#">Another notification</a></li>
                              </ul>
                        </li>
						<li>
                            <a href="#">
								<img src="{{asset('img/gears.png')}}" alt="" style="float: left;margin-right: 5px;">
								<p>Ajustes</p>
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>


        <div class="content">
            <!-- <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-sm-6"> -->
                        <!-- <div class="card">********** -->
                            <!-- <div class="content"> -->
                                <!-- <div class="row">                 -->
                                @yield('content')
                                <!-- </div> -->
                            <!-- </div> -->
                        <!-- </div>********* -->
                    <!-- </div>                    
                </div>
            </div> -->
        </div>


        <footer class="footer">
            <div class="container-fluid">

                <div class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script>, realiazdo con <i class="fa fa-heart heart"></i> por <a href="http://www.creative-tim.com">UPN</a>
                </div>
            </div>
        </footer>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="{{asset('js/jquery.min.js')}}" type="text/javascript"></script>
	<script src="{{asset('js/bootstrap.min.js')}}" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="{{asset('js/bootstrap-checkbox-radio.js')}}"></script>

	<!--  Charts Plugin -->
	<script src="{{asset('js/chartist.min.js')}}"></script>

    <!--  Notifications Plugin    -->
    <script src="{{asset('js/bootstrap-notify.js')}}"></script>

    <!--  Google Maps Plugin    -->
   

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
	<script src="{{asset('js/paper-dashboard.js')}}"></script>

	<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
	<script src="{{asset('js/demo.js')}}"></script>




</html>
