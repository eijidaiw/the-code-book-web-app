
{!!
	Form::model($board,
	['method' => 'PATCH',
		'url' => ['boards',$board->id],
	])
!!}

{!! Form::label('title','Title : ') !!} <br>
{!! Form::text('title','null')!!} <br>

{!! Form::label('body','Body : ') !!} <br>
{!! Form::textarea('body','null')!!} <br>

{!! Form::submit('Update') !!} 
{!! Form::close()!!}

