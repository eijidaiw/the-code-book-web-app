<table>
	<tbody>

			@foreach($data as $item)
			<tr>
				<td>{{$item['id']}}</td>
				<td>{{$item['name']}}</td>
			</tr>
			@endforeach

	</tbody>
</table>