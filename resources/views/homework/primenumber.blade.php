@extends('homework/master')

@section('title','Temperature Converter')

@section('content')

<div class="container text-center">
	<h2>Prime Factors</h2>
</div>
<div class="container">
	<div class="col-md-4">

	</div>
	<div class="col-md-4">
	
		<form action="primenumber" method="POST" role="form">		
			<div class="form-group">
				<input type="number" min="0" class="form-control" name="n1" value="{{$n1}}"> 					
			</div>
			<button type="submit" class="btn btn-primary">Calculate</button>
			<br>
			<h4>Result = {{$result}}</h4>
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

