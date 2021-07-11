<?php 

$controller = new helper();

$new = new NewDb();

$category = $controller->getCategory();

?>
<div class="new-blog">
	<div class="message successfully"></div>
	<form action="<?php echo $_SERVER['PHP_SELF'].'?c=blog&a=new';?>" method="post">
		<p>
			<label>Blog name</label>
			<input type="text" name="name_blog" class="name_blog input-blog">
			<span class="error">Name is required</span>
		</p>
		<p>
			<label>Thumnail image</label>
			<input type="file" name="thumnail_image" accept="image/*" class="image_blog input-blog">
			<span class="error">Thumnail image is required</span>
		</p>
		<p>
			<label>Category</label>
			<select name="category_id" class="category_blog input-blog">

				<?php foreach ($category as $category_item): ?>
					
					<option value="<?= $category_item['id'] ?>"><?= $category_item['name'] ?></option>

				<?php endforeach;?>	

			</select>
		</p>
		<p>
			<label>Content</label>
			<textarea name="content" class="content_blog input-blog"></textarea>
			<span class="error">Content is required</span>
		</p>
		<p>
			<label>Author</label>
			<input type="text" class="author_blog input-blog">
			<span class="error">Author is required</span>
		</p>
		<input type="submit" value="save" class="submit_blog">
	</form>
</div>
