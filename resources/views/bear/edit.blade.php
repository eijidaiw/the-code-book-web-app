@extends('layouts/app')

@section('title','Edit')

@section('style')
<style type="text/css">
       
</style>
@endsection
@section('content')
	<div class="container">
	<div class="panel panel-default" id="panel1">
		  <div class="panel-heading">
				<h1 class="panel-title">Edit</h1>
		  </div>
		  <div class="panel-body">
		  	{!!
				Form::model($bear,
				[
					'method' => 'PATCH',
					'url' => ['index',$bear->id],
				])
			!!}
				<div class="form-group col-md-8">
					{!! Form::label('name','Name: ') !!}
					{!! Form::text('name', $bear->name, ['class' => 'form-control','required' => 'required']) !!}
					{!! $errors->first('name', '<p>:message</p>') !!}
				</div>
				<div class="form-group col-md-4" id="list">
					{!! Form::label('weight','Weight: ') !!}
					{!! Form::text('weight', $bear->weight, ['class' => 'form-control','required' => 'required']) !!}
					{!! $errors->first('weight', '<p>:message</p>') !!}
					
				</div>
				<div align="right" class="col-md-12">
					{!! Form::submit('Edit',['class'=>'btn btn-primary']) !!}
				</div>
				{!! Form::close() !!}
			</div>
		  </div>
@endsection

