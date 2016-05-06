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
	<div class="col-md-6 col-xs-12">
		<h2><i class="fa fa-code" aria-hidden="true"></i>C-Sharp Code</h2>
	</div>
	<div class="col-md-6 col-xs-12 ">
	<br>
		<form method="POST" role="form" class="right">
			<div class="form-group col-md-8 ">
				<input type="text" class="form-control right" name="search" placeholder="Search">
			</div>
			<div class="col-md-4 ">
				<button type="submit" class="btn right">Search</button>
			</div>
			
		</form>
	</div>
	
		<table class="table table-condensed table-hover"> 
		<thead>
			<tr>
				<td class="col-md-8"> <span class="glyphicon glyphicon-book"></span> Title</td>
			</tr>
		</thead>
	@foreach ($codedatas as $s)
		<tbody>
			<tr>
				<td><a href="{{$s->id}}">{{$s->title}}</a></td>
			</tr>
		</tbody>
	@endforeach
	</table>
	<div class="">
		{!! $codedatas->render() !!}
	</div>
	
	</div>
	
@endsection

