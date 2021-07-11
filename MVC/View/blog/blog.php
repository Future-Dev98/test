<?php

$helper = new helper();

$blog = '';

$title = '';
if(!empty($_GET['id'])){

	$blog = $helper->getBlogByCategory($_GET['id']);

	$title = $helper->getCategoryName($_GET['id']);

}else{
	$blog = $helper->getBlog();
}

$path = '?c=blog&a=detail&id=';
?>

<?php if($title): ?>
	<h1 class="page-title"><?= $title; ?></h1>
<?php endif;?>

<div class="list-blog">
	<?php foreach ($blog as $item): ?>
		<div class="item_blog">
			<div class="item">
				<div class="image">
					<a href="<?= $path.$item['id']; ?>">
						<img src="<?= PATH.$item['image_thumnail']; ?>">
					</a>
					
				</div>
				<a href="<?= $path.$item['id']; ?>">
					<span class="name-blog"><?= $item['name']; ?></span>
				</a>
				<div class="short-description"><?= $item['content']; ?></div>
			</div>
			
		</div>
	<?php endforeach;?>
</div>