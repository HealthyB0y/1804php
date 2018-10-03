<a href="post_insert.php" class="btn btn-success">Add New</a> 
<?php

function pr($a){
	echo '<pre>';
	print_r($a);
	echo '</pre>';
}

	include 'connect.php';
	include 'library.php';

	$query = "select posts.id,
				posts.title,
				posts.content,
				posts.desciption,
				posts.author,
				posts.status,
				categories.name 
	from posts 
	join categories 
	on posts.categories_id = categories.id
	";

	$queryData = $connection->prepare($query);

	$queryData ->execute();

	$posts = $queryData -> fetchAll();
	// pr($posts);
?>

<table class="table">
	<thead>
		<th>id</th>
		<th>title</th>
		<th>content</th>
		<th>desciption</th>
		<th>author</th>
		<th>status</th>
		<th>categories name</th>
		<th>Action</th>
	</thead>		
	<tbody>
		<?php
			foreach ($posts as $post ) {
				# code...
		?>
		<tr postId="post-<?=$post['id']?>">
			<td><?=$post['id']?></td>
			<td><?=$post['title']?></td>
			<td><?=$post['content']?></td>
			<td><?=$post['desciption']?></td>
			<td><?=$post['author']?></td>
			<td><?=$post['status']?></td>
			<td><?=$post['name']?></td>
			<td>
				<a href="update_post.php?id=<?= $post['id']?>" class="btn btn-primary" >Update</a>
				<a href="javascript:void(0)" postId="<?=$post['id']?>" class="btn btn-warning postRemove">Remove</a>
			</td>
		</tr>
		<?php
		}
		?>
	</tbody>
</table>
<img 
	id="loading"
	src="./js/Spinner-1s-200px (1).svg"
	style="position: absolute;top: 100px;left: 40%;display: none;" 
	/>
<script src="./js/remove_post_ajax.js"></script>