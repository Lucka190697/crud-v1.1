<td>
	<a class="btn btn-outline-primary" href="{{ route('users.show', $item->id) }}">
		<i class="fa fa-eye"></i> Ver
	</a>
	<a class="btn btn-outline-success" href="{{ route('users.edit', $item->id) }}">
		<i class="fa fa-edit"></i> Editar
	</a>
	<a class="btn btn-outline-danger" href="{{ route('users.destroy', $item->id) }}">
		<i class="fa fa-eraser"></i> Remover
	</a>
</td>
