@extends('project1/admin_master')

@section('title','THE CODE BOOK')

@section('style')
<style type="text/css">
        .code {
            width: 100%;
            white-space: pre-wrap;
            border: solid lightgrey 1px
        }
    </style>
@endsection
@section('content')

	<h1>List Codes</h1>
	<table class="table table-condensed table-hover">
		<thead>
			<tr>
				<td class="col-md-8"> <span class="glyphicon glyphicon-book"></span> Title</td>
				<td class="col-md-2"> <span class="glyphicon glyphicon-tags"></span> Language</td>
				<td class="col-md-2"> <span class="glyphicon glyphicon-cog"></span> Option</td>
			</tr>
		</thead>

		@foreach ($codedatas as $s)
		<tbody>
			<tr>
				<td ><a data-toggle="modal" data-target="#{{$s->id}}">{{$s->title}}</a></td>
				<div id="{{$s->id}}" class="modal fade" role="dialog">
					<div class="modal-dialog modal-lg" id="modal1">
						<!-- Modal content-->
						<div class="modal-content">
							<div class="modal-header">
								{!! Form::button('&times;',['class'=>'close','data-dismiss'=>'modal']) !!}
								<h4 class="modal-title">{{$s->title}}</h4>
							</div>
							<div class="panel-body">
								<pre class="code" ace-mode="ace/mode/java" ace-theme="ace/theme/monokai" ace-gutter="true">{{$s->content}}</pre>
							</div>
							<div class="modal-footer">
								{!! Form::button('Close',['class'=>'btn btn-default','data-dismiss'=>'modal']) !!}
							</div>
						</div>

					</div>
				</div>
				<td >{{ $s->type}}</td>
				<td >
					<a href="admin/{{$s->id}}/edit"> <span class="glyphicon glyphicon-edit"></span></a> |
					{!! Form::open(['method'=>'DELETE',
									'url' => ['thecodebook/admin', $s->id],
									'style' => 'display:inline' ]) !!}
					<a href="#" onclick="this.parentNode.submit()"> <span class="glyphicon glyphicon-trash"></span></a>
					{!! Form::close() !!}
				</td>
			</tr>
		</tbody>

		
		@endforeach
	</table>
			  {!! $codedatas->render() !!}
	<hr>
		<a href="admin/create"> <span class="glyphicon glyphicon-pencil"> Create </a>
	<hr>
	<script src="{{ URL::asset('src/ace.js') }}"></script>
<!-- load ace static_highlight extension -->
	<script src="{{ URL::asset('src/ext-static_highlight.js') }}"></script>
	<script>
	    var highlight = ace.require("ace/ext/static_highlight")
	    var dom = ace.require("ace/lib/dom")
	    function qsa(sel) {
	        return Array.apply(null, document.querySelectorAll(sel));
	    }

	    qsa(".code").forEach(function (codeEl) {
	        highlight(codeEl, {
	            mode: codeEl.getAttribute("ace-mode"),
	            theme: codeEl.getAttribute("ace-theme"),
	            startLineNumber: 1,
	            showGutter: codeEl.getAttribute("ace-gutter"),
	            trim: true
	        }, function (highlighted) {
	            
	        });
	    });
	</script>
@endsection

