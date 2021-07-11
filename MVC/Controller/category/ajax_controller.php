<?php
require "../../Model/Model.php";
class ajaxController extends Model{
	public function deleteCategory($id){

 		$this->deleteDB("category", $id);

 	}

 	public function deleteBlog($id){

 		$this->deleteDB("blog", $id);

 	}

 	public function newBlog($name, $image, $content, $category, $author){

		$sql = $this->insertBlog($name, $image, $content, $category, $author);

		if ($this->connectDB()->query($sql) === TRUE) {

			  echo "New Blog created successfully";

			} else {

			  echo "Error: " . $sql . "<br>" . $this->connectDB()->error;	

			}

	}

	public function editBlog($name,$image,$content,$category,$author,$id){

		return $this->updateBlog($name,$image,$content,$category,$author,$id);
	}


}