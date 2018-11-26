<td>
	<a class="btn btn-outline-primary" href="{{ route('products.show', $item->id) }}">
		<i class="fa fa-eye"></i> Ver
	</a>
	<a class="btn btn-outline-success" href="{{ route('products.edit', $item->id) }}">
		<i class="fa fa-edit"></i> Editar
	</a>
	<a class="btn btn-outline-danger" href="{{ route('products.destroy', $item->id) }}">
		<i class="fa fa-eraser"></i> Excluir
	</a>
</td>
