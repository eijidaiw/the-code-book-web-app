@extends('homework/master')

@section('title','Temperature Converter')

@section('content')

<div class="container text-center">
	<h2>Temperature Converter</h2>
</div>
<div class="container">
	<div class="col-md-4">

	</div>
	<div class="col-md-4">
	
		<form action="temperatureconverter" method="POST" role="form">		
			<div class="form-group">
				<div class="row">
					<div class="col-md-3">
						<input type="number" class="form-control" name="n1" value="{{$n1}}"> 
					</div>
					<div class="col-md-1">°C</div>
					<div class="col-md-3">
						<select name="select">
							<option value="ctof">  ->  </option>
							<option value="ftoc">  <-  </option>
						</select>
					</div>
					<div class="col-md-3">
						<input type="number" class="form-control" name="n2" value="{{$n2}}" > 
					</div>
					<div class="col-md-1">°F</div>
				</div>
				
			</div>
			<button type="submit" class="btn btn-primary">Convert</button>
		</form>
		</br>
		@if (count($errors) > 0)
		<div class="alert alert-danger">
			<ul>
				@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
		@endif
	</div>
	<div class="col-md-4">

	</div>

</div>
@endsection

