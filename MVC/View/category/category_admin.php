<a href="?c=category&a=new">Add new category</a>
<?php 

$category = new Category();

$result = $category->getCategory();

foreach ($result as $categories) :?>

	<div class="categies">

		<div class="category-name"><?= $categories["name"]; ?></div> 
		<button class="delete-category" id="<?= $categories['id']; ?>">Delete</button>
		<a href="?c=category&a=edit&id=<?= $categories['id']; ?>">Edit</a>
		
	</div>
	
<?php endforeach;?>

<p class="ajax"></p>