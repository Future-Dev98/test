<form method="post" action="<?php echo $_SERVER['PHP_SELF'].'?c=category&a=new';?>">
	<label>New category</label>
	<input type="text" name="name_category" value="">
	<input type="submit" value="save">
</form>
<?php 
$new = new NewDb();

if(!empty($_POST["name_category"])){
	$new->newCategory($_POST["name_category"]);
}


?>