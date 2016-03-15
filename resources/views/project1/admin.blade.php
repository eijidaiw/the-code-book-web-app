@extends('project1/admin_master')

@section('title','THE CODE BOOK')

@section('content')
	<table class="table table-condensed table-hover">
		<thead>
			<tr>
				<td class="col-md-8">Title</td>
				<td class="col-md-2">Language</td>
				<td class="col-md-2">Option</td>
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
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title">{{$s->title}}</h4>
							</div>
							<div class="panel-body">
								<pre><code class="java Hljs">{{$s->content}}</code></pre>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							</div>
						</div>

					</div>
				</div>
				<td >{{ $s->type}}</td>
				<td >
					<a href="code/edit/{{$s->id}}"> Edit </a> |
					<a href="code/delete/{{$s->id}}"> Delete </a>
				</td>
			</tr>
		</tbody>
		
		@endforeach
	</table>
			  {!! $codedatas->render() !!}
	<hr>
		<a href="code/create"> Create </a>
	<hr>
@endsection