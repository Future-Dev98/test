<?php 

Class Model{

	public function connectDB(){

		$conn = new mysqli("localhost","root","","training");

		return $conn;

	}

	public function createBlog(){
		$this->connectDB();
		$sql = "CREATE TABLE blog_item (
				id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
				name VARCHAR(250) NOT NULL,
				thumnail_image TEXT(2000) NOT NULL,
				content TEXT(2000) NOT NULL,
				category INT(6),
				create_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
			) DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci";

		if ($this->connectDB()->query($sql) === TRUE) {
		  echo "Table Blog created successfully";
		} else {
		  echo "Error creating table: " . $this->connectDB()->error;
		}
	}

	public function createTableCategory(){
		$sql = "CREATE TABLE category (
				id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
				name VARCHAR(250) NOT NULL,
				create_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
			) DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci";

		if ($this->connectDB()->query($sql) === TRUE) {
		  echo "Table category created successfully";
		} else {
		  echo "Error creating table: " . $this->connectDB()->error;
		}
	}


	public function insertCategory($name){

			$this->connectDB();

			return "INSERT INTO category (name) VALUES ('$name')";

	}

	public function insertBlog($name, $image, $content, $category, $author){


			$this->connectDB();

		return  "INSERT INTO blog (name, image_thumnail, content, category, author) VALUES ('$name', '$image', '$content', '$category', '$author')";

			

	}

	public function selectDb($tablename){

		$this->connectDB();

		$sql = "SELECT * FROM $tablename";

		$result = $this->connectDB()->query($sql);

		return $result;

	}


	public function selectDbById($tablename,$id){

		$sql = "SELECT * FROM $tablename WHERE id=$id ";

		$result = $this->connectDB()->query($sql)or die($this->connectDB()->error);

		return $result;

	}

	public function selectDbByCategory($category_id){

		$sql = "SELECT * FROM blog WHERE category=$category_id ";

		$result = $this->connectDB()->query($sql)or die($this->connectDB()->error);

		return $result;

	}

	public function deleteDB($table,$id){

		$this->connectDB();

		$sql = "DELETE FROM $table WHERE id = $id";

		$this->connectDB()->query($sql);

		$this->connectDB()->close();

	}

	public function updateCategory($name,$id){

		$this->connectDB();

		$sql = "UPDATE category SET name='$name' WHERE id = $id";

		$this->connectDB()->query($sql);

	}

	public function updateBlog($name,$image,$content,$category,$author,$id){

		$this->connectDB();

		$sql = "UPDATE blog SET name='$name',image_thumnail='$image',content='$content',category='$category',author='$author' WHERE id = $id";

		$this->connectDB()->query($sql);

	}

	public function addColumn(){

		$this->connectDB();

		$sql = "ALTER TABLE blog ADD author VARCHAR(255) NOT NULL";

		$this->connectDB()->query($sql);
	}

}