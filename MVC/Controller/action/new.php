<?php

class NewDb extends Model{

	public function newCategory($name){

			$sql = $this->insertCategory($name);

			if ($this->connectDB()->query($sql) === TRUE) {

			  echo "<span class='message successfully'>New category created successfully</span>";

			} else {

			  echo "Error: " . $sql . "<br>" . $this->connectDB()->error;

			}

	}

	public function newBlog($name, $image, $content, $category){

		$sql = $this->insertBlog($name, $image, $content, $category);

		if ($this->connectDB()->query($sql) === TRUE) {

			  echo "<span class='message successfully'>New Blog created successfully</span>";

			} else {

			  echo "Error: " . $sql . "<br>" . $this->connectDB()->error;

			}

	}

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}