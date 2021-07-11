<?php
	
	$edit = new edit();

	$category = $edit->getCategoryById($_GET['id']);

	$model = new Model();

	if(isset($_POST["category_name"])){
		$edit->editCategory($_POST["category_name"], $_GET['id']);
	}
	

?>
<form action="<?= $_SERVER['PHP_SELF'].'?c=category&a=edit&id='.$_GET['id']; ?>" method="post">

	<?php foreach ($category as $category_item):?>
	
		<input type="text" name="category_name" value="<?= $category_item['name']; ?>">

	<?php endforeach;?>

	<input type="submit" value="save" class="update">
</form>

<?php
