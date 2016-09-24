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
      <STYLE>   body {
        background: #fd5f44;
         }
      </STYLE>

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


	
<div class="row">
  <div class="col-md-4">.</div>
  <div class="col-md-4">@yield('content')</div>
  <div class="col-md-4">.</div>
</div>




	

	<!-- Scripts -->
	{!! Html::script('assets/js/bootstrap.min.js') !!}
</body>
</html>