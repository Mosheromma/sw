<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Kein Dreck</title>

	{!! Html::style('assets/css/bootstrap.css') !!}
	{!! Html::style('assets/css/kd-ADM-style.css') !!}
	{!! Html::style('assets/css/simple-sidebar.css') !!}

      <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>

	<!-- Fonts -->

	<link href="https://fonts.googleapis.com/css?family=Open+Sans|Open+Sans+Condensed:300|Source+Sans+Pro" rel="stylesheet">  
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>


	<nav class="navbar navbar-default KD_ADM-topBarStyle KD_ADM-tB-LG navbar-fixed-top" role="navigation">
		<div class="container-fluid KD_ADM-tB-LG">

		
				<div class="row KD_ADM-tB-LG">
				  <div class="col-md-6">
				  	
				  	<a class="KD_ADM-logo" href="#">KDScript CPanel <span class="KD_ADM-logoSmall">v1.0 BETA</span></a>

				  </div>
				  <div class="col-md-6">
				  	<ul class="nav navbar-nav KD_ADM-ausLogg">
	                  <li class="active">

						   <a href="#" class="KD_ADM-ausLoggInB">
						   <span class="badge pull-right KD_ADM-ausLoggBt">X</span>
						      AUSLOGGEN
						   </a>
						  </li>
	              
	                </ul>
				  </div>
				</div>
     
	

			   

            <!-- /.navbar-collapse -->

		</div>
	</nav>

	    <div id="KD_ADM-wrapper">

        <!-- Sidebar -->
        <div id="bs-example-navbar-collapse-1">
        <div id="KD_ADM-sidebar-wrapper">
            <ul class="KD_ADM-sidebar-nav">
                <li class="KD_ADM-sidebar-brand">
                    <a href="#">
                        Wilkommen 
                    </a>
                </li>
                <li>
                    <a href="{{ URL::to('/admin') }}">INDEX TAFFEL</a>
                </li>
                <li>
                    <a href="#">KUNDEN</a>
                </li>
                <li>
                    <a href="#">MITARBEITER</a>
                </li>
                <li>
                    <a href="#">RECHNUNGEN</a>
                </li>
                <li>
                    <a href="#">ARBEITSPLANUNG</a>
                </li>
                <li>
                    <a href="{{ URL::to('/admin_users') }}">BENUTZER</a>
                </li>
                <li>
                    <a href="#">MAIL-SYSTEM</a>
                </li>
            </ul>

            <div class="KD_ADM-systemInfo">KDScript v1.0.0 BETA <p>Created by Moises Romaniuc</p>
            <p>Aqui pondremos el copyright de la empresa</p></div>
        </div>

        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="KD_ADM-page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->





	

	<!-- Scripts -->
	{!! Html::script('assets/js/bootstrap.min.js') !!}
</body>
</html>