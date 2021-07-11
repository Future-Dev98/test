<?php 
$helper = new helper();
$category = $helper->getCategory();
 ?>
<header>
	<ul>
		<li><a href="?c=home" class="home">Home</a></li>
		<li><a href="?c=category&a=category_admin" class="category">Category admin</a></li>
		<li><a href="?c=blog&a=blog_admin">Blog admin</a></li>
		<li><a href="?c=blog&a=blog">Category</a>
			<ul>
				<?php foreach ($category as $category_item):?>

					<li>
						<a href="?c=blog&a=blog&id=<?= $category_item['id']; ?>"><?= $category_item['name']; ?></a>
					</li>

				<?php endforeach;?>
				<li></li>
			</ul>
		</li>
	</ul>
</header>
