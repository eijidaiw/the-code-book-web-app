@extends('layouts/app')

@section('title','Bear')

@section('style')
<style type="text/css">
       
</style>
@endsection
@section('content')
	<div class="container">
	<div class="col-md-6 ">
		<h1>Bear database</h1>
	</div>
	<div class="col-md-6 ">
	<br>
		{!!Form::open(['url' => 'search'] )!!}
		
			<div class="form-group col-md-8 ">
				{!! Form::text('search', '',['class' => 'form-control right','required' => 'required','placeholder' => 'Search']) !!}
				{!! $errors->first('name', '<p>:message</p>') !!}
			</div>
			<div class="col-md-4 ">
				{!! Form::submit('Search',['class'=>'btn btn-primary']) !!}
			</div>
			
		</form>
	</div>
	<table class="table table-condensed table-hover">
		<thead>
			<tr>
				<td class="col-md-2">  ID</td>
				<td class="col-md-6">  Name</td>
				<td class="col-md-2">  Weight</td>
				<td class="col-md-2">  Option</td>
			</tr>
		</thead>

		@foreach ($bears as $s)
		<tbody>
			<tr>
				<td >{{$s->id}}</td>
				<td >{{$s->name}}</td>
				<td >{{$s->weight}}</td>
				<td >
					<a href="index/{{$s->id}}/edit"> <span class="glyphicon glyphicon-edit"></span></a> |
					{!! Form::open(['method'=>'DELETE',
									'url' => ['index', $s->id],
									'style' => 'display:inline' ]) !!}
					<a href="#" onclick="this.parentNode.submit()"> <span class="glyphicon glyphicon-trash"></span></a>
					{!! Form::close() !!}
				</td>
			</tr>
		</tbody>

		
		@endforeach
	</table>
			  {!! $bears->render() !!}
	</div>
	<div class="container">
		<hr/>
		@if (count($errors) > 0)
		<div class="alert alert-danger col-md-4">
			<ul>
				@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
		@endif
	</div>
	<div class="container">
		<h1>Add new bear</h1>
		{!!Form::open(['url' => 'index'] )!!}
		<div class="row">
			<div class="col-md-4">
				{!! Form::label('name', 'Name: ') !!}
				{!! Form::text('name', '',['class' => 'form-control']) !!}
				
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				{!! Form::label('weight', 'Weight: ') !!} 
				{!! Form::number('weight', '',['class' => 'form-control']) !!}
				
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
			<br>
				{!! Form::submit('Submit',['class'=>'btn btn-primary']) !!}
			</div>
			
		</div>
		{!! Form::close() !!}
	</div>
@endsection

