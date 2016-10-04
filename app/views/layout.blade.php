<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title>@yield('title')</title>

		<!-- Fonts -->
		<!--
		<link rel="stylesheet" href="{{ asset('assets/css/fonts.css') }}">
		-->
		<!-- Bootstrap 3.3.6 -->
		<link rel="stylesheet" href="{{ asset('packages/bootstrap/css/bootstrap.min.css') }}">
		<!-- Font Awesome -->
		<link rel="stylesheet" href="{{ asset('packages/font-awesome/css/font-awesome.min.css') }}">
		<!-- Bootstrap Dialog -->
		<link rel="stylesheet" href="{{ asset('packages/bootstrap-dialog/css/bootstrap-dialog-1.34.7.min.css') }}">

		<!-- Fonts Style -->
		<link rel="stylesheet" href="{{ asset('assets/css/fonts.css') }}">
		<!-- App Style -->        
		<link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body style="padding: 100px 0;">
		<!-- jQuery 2.2.0 -->
		<script src="{{ asset('packages/jquery/jquery-2.2.0.min.js') }}"></script>
		<!-- Bootstrap 3.3.6 -->
		<script src="{{ asset('packages/bootstrap/js/bootstrap.min.js') }}"></script>
		<!-- Bootstrap Dialog -->
		<script src="{{ asset('packages/bootstrap-dialog/js/bootstrap-dialog-1.34.7.min.js') }}"></script>

        <div class="container">
            @yield('content')
        </div>
	</body>
</html>