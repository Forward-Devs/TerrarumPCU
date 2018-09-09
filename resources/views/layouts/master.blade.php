
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="Terrarum RP es un servidor de GTA San Andreas Multi-Player con la modalidad de Roleplay.">
      <meta name="author" content="ForwardDevs">
			<meta name="csrf-token" content="{{ csrf_token() }}" />
      <!-- Favicon icon -->
      <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
      <title>Terrarum - Forward Games</title>

      <link href="{{asset('css/all.css')}}" id="theme" rel="stylesheet">
      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
  </head>

  <body class="fix-header fix-sidebar card-no-border logo-center">
    <div class="preloader">
      <svg class="circular" viewBox="25 25 50 50">
        <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
      </svg>
    </div>
		<div id="root">
				<router-view></router-view>
		</div>
    <script src="{{asset('js/all.js')}}"></script>
    <script src="{{asset('js/app.js')}}"></script>
  </body>
</html>
