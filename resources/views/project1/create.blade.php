@extends('project1/admin_master')

@section('title','THE CODE BOOK')

@section('content')
	<div class="panel panel-default" id="panel1">
		  <div class="panel-heading">
				<h3 class="panel-title">Add code</h3>
		  </div>
		  <div class="panel-body">
				<form role="form" action="add" method="post">
					<div class="form-group col-md-8">
						<label >Title:</label>
						<input type="text" class="form-control" name="title" >
					</div>
					<div class="form-group col-md-4" id="list">
						<label for="sel1">language</label>
						<select class="form-control" id="sel1" name="type">
							<option value="java">Java</option>
							<option value="python">Python</option>
							<option value="c#">C#</option>
							<option value="vb">VB/option>
						</select>
					</div>
					<div class="form-group col-md-12">
						<label for="pwd">Content:</label>
						<textarea class="form-control" rows="20" id="comment" name=content></textarea>
					</div>
					<div align="right" class="col-md-12">
							<button type="submit" class="btn btn-primary" >add</button>
					</div>
				</form>
			</div>
		  </div>
@endsection