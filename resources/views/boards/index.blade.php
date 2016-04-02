


@foreach($boards as $item)
{{ $item->id }} : {{ $item->title }} : {{ $item->body }} 
<a href="boards/delete/{{$item->id}}">delete</a> | <a href="boards/{{$item->id}}/edit">edit</a> 
<br>
@endforeach