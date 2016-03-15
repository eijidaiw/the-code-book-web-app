<!DOCTYPE html>
<html lang="thai">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	</head>
	<body class="container">
		<h3> Edit Student </h3>
		<form action="../update/{{ $student->id}}" method="post">
			<div class="row">						
				<div class="col-md-1"><input type="text" name="name" value="{{$student->name}}"></div>
				<div class="col-md-1"><input type="text" name="surname"value="{{$student->surname}}"></div>
				<div class="col-md-1"><input type="hidden" name="_token" value="{{ csrf_token() }}"></div>
				<div class="col-md-1"><input type="submit" class="btn btn-primary"> </div>
			</div>
		</form>

		<a href=../../student>Back</a>


		<!-- jQuery -->
		<script src="http://code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 	
	</body>
</html>