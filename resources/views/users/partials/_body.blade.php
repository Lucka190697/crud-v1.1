<td>
	<a class="lightbox" href="<?php echo asset('images/'. $item->image) ?>">
		<img src="<?php echo asset('profiles/' . $item->profile) ?>" 
		alt="image"
		width="100"
		eight="auto">
	</a>
</td>
<td><?php echo $item->name ?></td>
<td><?php echo $item->email ?></td>
<td><?php echo $item->cep ?></td>
<td><?php echo $item->city ?></td>
<td><?php echo $item->state ?></td>
<td><?php echo $item->district ?></td>
<td><?php echo $item->created_at ?></td>
