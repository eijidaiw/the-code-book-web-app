<!DOCTYPE html>
<html lang="thai">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>@yield('title')</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>

		<!-- font awesome -->
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

		<!-- bootstrap -->
		<!-- animate.css -->
		<link rel="stylesheet" href="{{ URL::asset('assets/animate/animate.css') }}" />
		<link rel="stylesheet" href="{{ URL::asset('assets/animate/set.css') }}" />

		<!-- gallery -->
		<link rel="stylesheet" href="{{ URL::asset('assets/gallery/blueimp-gallery.min.css') }}">

		<!-- favicon -->
		<link rel="shortcut icon" href="{{ URL::asset('images/favicon.ico') }}" type="image/x-icon">
		<link rel="icon" href="{{ URL::asset('images/favicon.ico') }}" type="image/x-icon">


		<link rel="stylesheet" href="{{ URL::asset('assets/style.css') }}">
	</head>
	<body>
	<div class="topbar animated fadeInLeftBig"></div>
		<div class="navbar-wrapper">
      <div class="container">

        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation" id="top-nav">
          <div class="container">
            <div class="navbar-header">
              <!-- Logo Starts -->
              <a class="navbar-brand" href="#home"><img src="{{ URL::asset('images/logo1.png') }}"  class="img-responsive" alt="logo"></a>
              <!-- #Logo Ends -->


              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>

            </div>


            <!-- Nav Starts -->
            <div class="navbar-collapse  collapse">
              <ul class="nav navbar-nav navbar-right scroll">
                 <li class="active"><a href="#works">Home</a></li>
                 <li ><a href="#about">About</a></li>
                 <li ><a href="#partners">Partners</a></li>
                 <li ><a href="#contact">Contact</a></li>
              </ul>
            </div>
            <!-- #Nav Ends -->

          </div>
        </div>

      </div>
    </div>

		<div class="container">
			@yield('content')
		</div>
		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
	</body>
</html>