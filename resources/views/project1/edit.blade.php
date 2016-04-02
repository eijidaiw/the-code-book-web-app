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
				<h1 class="panel-title">Edit code</h1>
		  </div>
		  <div class="panel-body">
		  	{!!
				Form::model($codedata,
				[
					'method' => 'PATCH',
					'url' => ['thecodebook/admin',$codedata->id],
				])
			!!}
				<div class="form-group col-md-8">
					{!! Form::label('title','Title: ') !!}
					{!! Form::text('title', $codedata->title, ['class' => 'form-control']) !!}
				</div>
				<div class="form-group col-md-4" id="list">
					{!! Form::label('language','Language: ') !!}
					{!! Form::select('language', array(	'java' => 'Java', 
														'python' => 'Python' ,
														'c#' => 'C#',
														'vb' => 'VB'), $codedata->type ,['class' => 'form-control']) 
					!!}
					
				</div>
				<div class="form-group col-md-12">
					{!! Form::label('content','Content: ') !!}
					<textarea name="content1" id="editor2" rows="50" style="width: 100%">{{ $codedata->content }}</textarea>
					<input type="hidden" name="content" id="content">

				</div>
				<div align="right" class="col-md-12">
					{!! Form::submit('Edit',['class'=>'btn btn-primary','onclick'=>'myFunction()']) !!}
				</div>
				{!! Form::close() !!}
			</div>
		  </div>
		  	<script src="{{ URL::asset('src/ace.js') }}"></script>
			<script>
			    var editor2 = ace.edit("editor2");
			    editor2.setTheme("ace/theme/monokai");
			    editor2.session.setMode("ace/mode/{{$codedata->type}}");
			    editor2.setAutoScrollEditorIntoView(true);
			    editor2.setOption("minLines", 50);
			    function myFunction() {
			    	document.getElementById("content").value = editor2.getValue();;
				}
			    
			</script>

			<script src="{{ URL::asset('show_own_source.js') }}"></script>
@endsection