<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Kein Dreck</title>

	{!! Html::style('assets/css/bootstrap.css') !!}
	{!! Html::style('assets/css/SWeg-ADM-style.css') !!}
	{!! Html::style('assets/css/simple-sidebar.css') !!}
    {!! Html::style('assets/css/SWeg-check.css') !!}
     {!! Html::style('assets/css/Font-Awesome/css/font-awesome.css') !!}
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">

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


	<nav class="navbar navbar-default SWeg_ADM-topBarStyle SWeg_ADM-tB-LG navbar-fixed-top" role="navigation">
		<div class="container-fluid SWeg_ADM-tB-LG">

		
				<div class="row SWeg_ADM-tB-LG">
				  <div class="col-md-6">
				  	
				  	<a class="SWeg_ADM-logo" href="#"></a>

				  </div>
				  <div class="col-md-6">
				  	<ul class="nav navbar-nav SWeg_ADM-ausLogg">
	                  <li class="active">

						   <a href="{{ URL::to('/auth/logout') }}" class="SWeg_ADM-ausLoggInB">
						   <span class="badge pull-right SWeg_ADM-ausLoggBt">X</span>
						      AUSLOGGEN
						   </a>
						  </li>
	              
	                </ul>
				  </div>
				</div>
     
	

			   

            <!-- /.navbar-collapse -->

		</div>
	</nav>

	    <div id="SWeg_ADM-wrapper">

        <!-- Sidebar -->
        <div id="bs-example-navbar-collapse-1">
        <div id="SWeg_ADM-sidebar-wrapper">
            <ul class="SWeg_ADM-sidebar-nav">
                <li class="SWeg_ADM-sidebar-brand">
                    <a href="#" style="text-transform: capitalize;">
                        Wilkommen {!!Auth::user()->name!!}
                    </a>
                </li>
                <li>
                    <a href="{{ URL::to('/admin') }}">HAUPTTAFFEL</a>
                </li>
                <li>
                    <a href="{{ URL::to('/admin/kunden') }}">KUNDEN</a>
                </li>
                <li>
                    <a href="#">MITARBEITER</a>
                </li>
                <li>
                    <a href="{{ URL::to('/admin_rech') }}">RECHNUNGEN</a>
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

            <div class="SWeg_ADM-systemInfo">KDScript v1.0.0 BETA <p>Created by Moises Romaniuc</p>
            <p>Aqui pondremos el copyright de la empresa</p>
             <p>Content here. <a class="alert" href=#>Alert!</a></p></div>
        </div>

        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="SWeg_ADM-page-content-wrapper">
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
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
  <script>
    $(function() {
      $('#datepicker').datepicker({
           prevText: '&#x3c;zurück', prevStatus: '',
            prevJumpText: '&#x3c;&#x3c;', prevJumpStatus: '',
            nextText: 'Vor&#x3e;', nextStatus: '',
            nextJumpText: '&#x3e;&#x3e;', nextJumpStatus: '',
            currentText: 'heute', currentStatus: '',
            todayText: 'heute', todayStatus: '',
            clearText: '-', clearStatus: '',
            closeText: 'schließen', closeStatus: '',
            monthNames: ['Januar','Februar','März','April','Mai','Juni',
            'Juli','August','September','Oktober','November','Dezember'],
            monthNamesShort: ['Jan','Feb','Mär','Apr','Mai','Jun',
            'Jul','Aug','Sep','Okt','Nov','Dez'],
            dayNames: ['Sonntag','Montag','Dienstag','Mittwoch','Donnerstag','Freitag','Samstag'],
            dayNamesShort: ['So','Mo','Di','Mi','Do','Fr','Sa'],
            dayNamesMin: ['So','Mo','Di','Mi','Do','Fr','Sa'],
          showMonthAfterYear: false,
          showOn: 'both',
          buttonImage: 'media/img/calendar.png',
          buttonImageOnly: true,
          dateFormat : "dd-mm-yy",
        } 
      );
        
    });
  </script>


  <script type="text/javascript">
      
$('#stat5').change(function(){
    if ($('#stat5').is(':checked') == true){
        $('#datepicker').val('').prop('disabled', true);
        console.log('checked');
    } else {
        $('#datepicker').val('').prop('disabled', false);
        console.log('unchecked');
    }
});

$('#stat6').change(function(){
    if ($('#stat6').is(':checked') == true){
        $('#datepicker').val('').prop('disabled', true);
        console.log('checked');
    } else {
        $('#datepicker').val('').prop('disabled', false);
        console.log('unchecked');
    }
});

$('#stat7').change(function(){
    if ($('#stat7').is(':checked') == true){
        $('#datepicker').val('').prop('disabled', false);
        console.log('checked');
    } else {
        $('#datepicker').val('').prop('disabled', false);
        console.log('unchecked');

    }
});

  </script>

<script type="text/javascript">
function disableCheck(field, causer) {
if (causer.checked) {
field.checked = false;
field.disabled = true;
}
else {
field.disabled = false;
}
}

function disableOthers(field) {
disableCheck(formulario.dos, field);
disableCheck(formulario.tres, field);
}

function disableUno() {
field = formulario.uno

if (formulario.dos.checked || formulario.tres.checked) {
field.checked = false;
field.disabled = true;
}
else {
field.disabled = false;
}
}

</script>

</body>
</html>