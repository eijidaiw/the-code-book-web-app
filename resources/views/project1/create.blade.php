@extends('project1/admin_master')

@section('title','THE CODE BOOK')

@section('style')
<style type="text/css" media="screen">

	.ace_editor {
		border: 1px solid lightgray;
		height: 500px;
		width: 100%;
	}
	.scrollmargin {
		height: 80px;
        text-align: center;
	}
    </style>
@endsection

@section('content')
	<div class="panel panel-default" id="panel1">
		  <div class="panel-heading">
				<h3 class="panel-title">Add code</h3>
		  </div>
		  <div class="panel-body">
				<form role="form" action="../admin" method="POST">
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
							<option value="vb">VB</option>
						</select>
					</div>
					<div class="form-group col-md-12">
						<label for="pwd">Content:</label>
						<textarea class="form-control" id="editor2" rows="20"></textarea>
					</div>
					<div align="right" class="col-md-12">
							<button type="submit" class="btn btn-primary" onclick="myFunction()">add</button>
							<input type="hidden" name="content" id="content">
					</div>
				</form>
			</div>
		  </div>
		  <script src="{{ URL::asset('src/ace.js') }}"></script>
			<script>
			    var editor2 = ace.edit("editor2");
			    editor2.setTheme("ace/theme/monokai");
			    editor2.session.setMode("ace/mode/java");
			    editor2.setAutoScrollEditorIntoView(true);
			    editor2.setOption("minLines", 50);
			    function myFunction() {
			    	document.getElementById("content").value = editor2.getValue();;
				}
			    
			</script>

			<script src="{{ URL::asset('show_own_source.js') }}"></script>
@endsection