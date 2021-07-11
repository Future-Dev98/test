<?php

$helper = new helper();

$blog = $helper->getBlogDetail($_GET["id"]);
?>

<div class="blog-detail">
	<?php foreach ($blog as $item): ?>
		<?php $d=strtotime($item['created_time']);?>
		<h1 class="page-title"><?= $item['name'];?></h1>
		<span class="author">Author: <?= $item['author'];?></span><span class="date">Date: <?= Date("Y-m-d",$d);?></span>
		<p><img src="<?= PATH.$item['image_thumnail']; ?>"></p>
		<div class="content-blog"><?= $item['content'];?></div>

	<?php endforeach;?>
</div>