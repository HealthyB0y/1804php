<?php
	function objectToArray($object){
		if(!is_object($object)  && !is_array($object)){
			return $object;
		} 
		return array_map('objectToArray', (array)$object);
	}

	$data = array_map('objectToArray', (array)$data);
?>
	<table>
		<thead>
			<th>ID</th>
			<th>Title</th>
			<th>Description</th>
			<th>Status</th>
		</thead>
		<tbody>
			<?php
				foreach ($data as $key => $post) {
					# code...?>
					<tr>
					<td><?= $post['id']?></td>
					<td><?= $post['title']?></td>
					<td><?= $post['description']?></td>
					<td><?= $post['connection']? 'RubLIC' : 'UNPUBLIC'?></td>
					</tr>
					<?php
				}
			?>
			<tr>
				<td>
					
				</td>
			</tr>
		</tbody>
	</table>
 ?>