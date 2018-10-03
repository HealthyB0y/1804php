<?php
	include 'connect.php';
	include 'library.php';
function pr($a){
	echo '<pre>';
	print_r($a);
	echo '</pre>';
}
if($_SERVER['REQUEST_METHOD'] == "GET")
{
	if($_GET['id']){
		$id = $_GET['id'];
		$query = "select *
	from posts 
	where id = $id
	";
		$queryData = $connection->prepare($query);
		$queryData->execute();	

		$post = $queryData->fetch();
		//check radio status
		$checkPublic = $post['status']?"check" : "";
		$checkUnPublic = $post['status']?"" : "check";
	} else
	{
		echo "Not Found id";
	}
} else
{
	echo "MEthod error";
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

$queryGetCat ="
	select *
	from categories"
;
$queryGetCatData = $connection->prepare($queryGetCat);
$queryGetCatData ->execute();

$categories = $queryGetCatData ->fetchAll();

?>
<form action="save_posts.php" method="POST" class="contrainer"> 
	<input type="hidden" name="id" value="<?=$post['id']?>">
	<input type="text" name="title" placeholder="title" value="<?=$post['title']?>"> 
	<br>
	<input type="text" name="content" placeholder="content" value="<?=$post['content']?>"> 
	<br>
	<input type="text" name="desciption" placeholder="desciption" value="<?=$post['desciption']?>">
	<br>
	
	<select name="author">
		<?php
		foreach ($authors as $key => $author) {
			if($posts['author']==$author['id']){
			?>
			<option selected value="<?= $author['id']?>">
				<?= $author['name']?>
			</option>
			<?php
			}
		?>
			<option value="<?= $author['id']?>"><?=$author['name']?>
			</option>	
		<?php
		}
	?>
	</select>

	<br>

	<select name="categories_id">
		<?php
		foreach ($categories as $key => $category) {
			if($posts['categories_id']==$category['id']){
			?>
				<option selected value="<?= $category['id']?>">
				<?= $category['name']?>
				</option>
			<?php
			}
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
