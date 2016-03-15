@extends('form/template')

@section('title','Form validation')

@section('header')
<h2>Form validation</h2>
@endsection

@section('content')
@if (count($errors) > 0)
<div class="alert alert-danger">
	<ul>
		@foreach ($errors->all() as $error)
		<li>{{ $error }}</li>
		@endforeach
	</ul>
</div>
@endif
This content
<form action="tem" method="POST" role="form">
	<legend>Form title</legend>

	<div class="form-group">
		<label for="">label</label>
		<input type="number" class="form-control" name="n1" id="" placeholder="Input field">
		<input type="number" class="form-control" name="n2" id="" placeholder="Input field">
	</div>
	<button type="submit" class="btn btn-primary">Submit</button>
	Result={{$n1+$n2}}
</form>
@endsection