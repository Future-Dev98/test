 <?php

require "../../Controller/category/ajax_controller.php";

$controller = new ajaxController();

if(isset($_POST["category_id"])){

	$controller->deleteCategory($_POST["category_id"]); 

	echo "Xoá category thành công";

}

//add new blog
if(!empty($_POST['name_blog']) && !empty($_POST['image_blog']) && !empty($_POST['category_blog']) && !empty($_POST['content_blog']) && !empty($_POST['author_blog'])){

	$controller->newBlog($_POST['name_blog'], $_POST['image_blog'], $_POST['content_blog'], $_POST['category_blog'],$_POST['author_blog']);
	
}

//delete blog
if(!empty($_POST['delete_blog_id'])){

	$controller->deleteBlog($_POST['delete_blog_id']);

}

//edit blog

if(!empty($_POST['edit_blog_name']) && !empty($_POST['edit_blog_image']) && !empty($_POST['edit_blog_category']) && !empty($_POST['edit_blog_content']) && !empty($_POST['edit_author_blog'])){

	$edit_blog_name = $_POST['edit_blog_name'];
	$edit_blog_image = $_POST['edit_blog_image'];
	$edit_blog_category = $_POST['edit_blog_category'];
	$edit_blog_content = $_POST['edit_blog_content'];
	$edit_author_blog = $_POST['edit_author_blog'];
	$edit_blog_id = $_POST['edit_blog_id'];

	$controller->editBlog($edit_blog_name,$edit_blog_image,$edit_blog_content,$edit_blog_category,$edit_author_blog,$edit_blog_id);

	echo "Edit blog Thành công";

}
