<?php

$edit_blog = new edit();

$blog = $edit_blog->getBlog($_GET['id']);

$helper = new helper();

$category = $helper->getCategory();

?>
<div class="edit-blog">
	<div class="message successfully"></div>
	<form method="post">

		<?php foreach ($blog as $item):?>

			<p>
				<label>Blog name</label>
				<input type="text" name="name_blog" class="edit_name_blog input-blog" value="<?= $item['name']; ?>">
				<span class="error">Name is required</span>
			</p>
			<p>
				<label>Thumnail image</label>
				<input type="file" name="thumnail_image" accept="image/*" class="edit_image_blog input-blog" value="<?= $item['image_thumnail'] ?>">
				<span class="error">Thumnail image is required</span>
			</p>
			<p>
				<label>Category</label>
				<select name="category_id" class="edit_category_blog input-blog">

					<?php foreach ($category as $category_item): ?>
						
						<option value="<?= $category_item['id'] ?>"  <?php if($category_item['id'] == $item['category']){ echo "selected='selected'"; } ?> >
							
							<?= $category_item['name'] ?>
								
						</option>

					<?php endforeach;?>	

				</select>
			</p>
			<p>
				<label>Content</label>
				<textarea name="content" class="edit_content_blog input-blog" ><?= $item['content'] ?></textarea>

				<span class="error">Content is required</span>
			</p>
			<p>
				<label>Author</label>
				<input type="text" value="<?= $item['author']; ?>" class="edit_author_blog input-blog">
				<span class="error">Author is required</span>
			</p>
		<?php endforeach;?>
		<input type="submit" value="save" class="edit_blog_submit" id="<?= $item['id']; ?>">
	</form>
</div>