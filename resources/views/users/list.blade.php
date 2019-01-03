<table>
	<th>nome</th>
	<th>telefone</th>
	<th>categoria</th>

	@foreach ($users as $key => $user)
		<tr>
			<td>{{$user->name}}</td>
			<td>{{$user->telefone}}</td>
			<td>{{$user->category->name}}</td>
		</tr>
	@endforeach
</table>
