<!DOCTYPE html>
<html lang="thia">
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
		<style>
			.other-color{
    			background: white
  			}
			body {
		        font: 20px Montserrat, sans-serif;
		        line-height: 1.8;
		        color: black;
			}
			p {font-size: 16px;}
		  .margin {margin-bottom: 45px;}
		  .bg-1 { 
		      background-color: #1abc9c; /* Green */
		      color: #ffffff;
		  }
		  .bg-2 { 
		      background-color: #474e5d; /* Dark Blue */
		      color: #ffffff;
		  }
		  .bg-3 { 
		      background-color: #ffffff; /* White */
		      color: #555555;
		  }
		  .bg-4 { 
		      background-color: #2f2f2f; /* Black Gray */
		      color: #fff;
		  }
		  .container-fluid {
		      padding-top: 70px;
		      padding-bottom: 70px;
		  }
		  .navbar {
		      font-size: 12px;
		      letter-spacing: 5px;
		  }
		  .navbar-nav  li a:hover {
		      color: #1abc9c !important;
		  }
		  footer {
    		position:absolute;
   			bottom:0;
   			width:100%;
   			height:60px;
		}
		</style>

	@yield('style')
	</head>
	<body >
		<nav class="navbar navbar-default jumbotron other-color" role="navigation">
			<div class="container ">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header"> 
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<p class="navbar-brand">THE CODE BOOK</p>
				</div>
		
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav">
						
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li> <span class="filetypes filetypes-jar"></span><a href="#">Java</a></li>
						<li><a href="#">Python</a></li>
						<li><a href="#">C#</a></li>
						<li><a href="#">VB</a></li>
						<li><a href="#">Shared Code</a></li>
						<li class="dropdown">
        					<a class="dropdown-toggle" data-toggle="dropdown" href="#">
	        					<span class="glyphicon glyphicon-menu-hamburger"></span>
							</a>
						        <ul class="dropdown-menu">
						          	<li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      								<li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Sign In</a></li>
						        </ul>
						</li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div>
		</nav>

		<div class="container">
			@yield('content')
		</div>
		<footer class="container-fluid bg-1 " style="border-style: solid; border-width: 1px;border-color: #e7e7e7;">
			<div class="container">
				hi
			</div>
		</footer>
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	</script>
	</body>
</html>