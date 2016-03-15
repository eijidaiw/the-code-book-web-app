@extends('homework/master')

@section('title','Calculator')

@section('content')

<div class="container text-center">
	<h2>Calculator</h2>
</div>
<div class="container">
	<div class="col-md-4">

	</div>
	<div class="col-md-4">
	
		<form action="calculator" method="POST" role="form">		
			<div class="form-group">
				<input type="number" class="form-control" name="n1" value="{{$n1}}">
					<select name="select">
						<option value="add">  +  </option>
						<option value="minus">  -  </option>
						<option value="muสtiply">  x  </option>
						<option value="divide">  /  </option>
					</select>
				<input type="number" class="form-control" name="n2" value="{{$n2}}">
			</div>
			@if($select==="add")
				<h4>Result={{$n1+$n2}}</h4>
			@elseif($select==="minus")
				<h4>Result={{$n1-$n2}}</h4>
			@elseif($select==="multyply")
				<h4>Result={{$n1*$n2}}</h4>
			@elseif($select==="divide")
				@if($n2==="0")
				<h4>Result=Infinity</h4>
				@else
				<h4>Result={{$n1/$n2}}</h4>
				@endif
			@else
				<br>
			@endif
			<button type="submit" class="btn btn-primary">Calculate</button>
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

