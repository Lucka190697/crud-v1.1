<td>
	<a class="lightbox" href="<?php echo asset('images/'. $item->image) ?>">
	<img src="<?php echo asset('images/'. $item->image) ?>" 
         alt="image"
         width="100"
         height="auto"> 
     </a>
</td>
<td><?php echo $item->title ?> </td>
<td><?php echo $item->description ?></td>
<td><?php echo $item->price ?></td>
<td><?php echo $item->created_at ?></td>
<td><?php echo $item->updated ?></td>