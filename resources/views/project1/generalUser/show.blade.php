@extends('project1/generalUser/layouts')

@section('title','THE CODE BOOK')

@section('style')
<style>
	.con{
		padding-left: 10%;
		padding-right: 10%;
	}
	.t{
		font: 20px Montserrat, sans-serif;
		line-height: 1.8;
		font-size: 16px;
		color:#777;
	}
	a{
		color:#777;
	}
	a:hover {
      color: #1abc9c !important;
  	}
  	.pagination>li>a,
	.pagination>li>span {
  		color: #1abc9c;
	}
	.pagination>.active>span:hover,.pagination>li.active>span {
	  background: #1abc9c;
	  color: #fff;
	  border: 1px solid #1abc9c;
	}
	.right{
		float:right;
	}
	.btn{
		background: #1abc9c;
		color:#fff;
	}
	.btn:hover{
		background:#148f77;
		color:#fff;
	}
	input:focus, input[text]:focus, .uneditable-input:focus{
    	box-shadow: 0 1px 1px #3ee4a8 inset, 0 0 8px #3ee4a8 !important;
	}
</style>
@endsection

@section('content')
	
	<div class="con t">
		<div class="panel panel-default" id="panel1">
				<div class="panel-heading">
                    <h3 class="panel-title">{{$codedata->title}}</h3>
                    @if($codedata->type==="c#")
                    <a href="{{ url('thecodebook/c-sharp') }}">
                    @else
                    <a href="{{ url('thecodebook/'.$codedata->type) }}">
					@endif
                    <span class="badge">{{$codedata->type}}</span></a>
                </div>
                <div class="panel-body">
                	@if($codedata->type==="c#")
                    <pre class="code" ace-mode="ace/mode/csharp" ace-theme="ace/theme/monokai" ace-gutter="true">{{$codedata->content}}</pre>
                    @elseif($codedata->type==="vb")
                    <pre class="code" ace-mode="ace/mode/vbscript" ace-theme="ace/theme/monokai" ace-gutter="true">
                    {{$codedata->content}}</pre>
					@else
                    <pre class="code" ace-mode="ace/mode/{{$codedata->type}}" ace-theme="ace/theme/monokai" ace-gutter="true">
                    {{$codedata->content}}</pre>
					@endif
                   
				</div>
		</div>
	</div>
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