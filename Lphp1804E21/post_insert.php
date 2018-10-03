<?php
	include 'connect.php';
	include 'library.php';

function pr($a){
	echo '<pre>';
	print_r($a);
	echo '</pre>';
}
// Truy van lay ra id va name cua users

 $queryGetAuthor = "
 	select id,name
 	from users"
;

// chuan bi cau truy van va thuc hien truy van

$queryGetAuthorData = $connection -> prepare($queryGetAuthor);
$queryGetAuthorData ->execute();
// lay ra danh sach authors
$authors= $queryGetAuthorData->fetchAll();
// pr($authors);

$queryGetCat ="
	select *
	from categories"
;
$queryGetCatData = $connection->prepare($queryGetCat);
$queryGetCatData ->execute();

$categories = $queryGetCatData ->fetchAll();
// pr($categories);


?>
<form action="save_posts.php" method="POST" class="contrainer"> 
	<input type="text" name="title" placeholder="title"> 
	<br>
	<input type="text" name="content" placeholder="content"> 
	<br>
	<input type="text" name="desciption" placeholder="desciption">
	<br>
	
	<select name="author">
		<?php
		foreach ($authors as $key => $author) {
			# code...
		?>
			<option value="<?= $author['id']?>">
				<?= $author['name']?>
			</option>
		<?php	
		}
		?>
	</select>

	<br>

	<select name="categories_id">
		<?php
		foreach ($categories as $key => $category) {
			# code...
		?>
			<option value="<?= $category['id']?>">
				<?= $category['name']?>
			</option>
		<?php	
		}
		?>
	</select>
	<br>
	<input type="radio" name="status" value="1"> PUBLIC<br/>
	<input type="radio" name="status" value="0"> UNPUBLIC<br/>

	<input type="submit" name="submit" value="SUBMIT" class="btn btn-success">
	<input type="reset" value="RESET" >
</form>