<?php 
class helper extends Model{

	public function getCategory(){

 		$result = $this->selectDb("category");

 		$list = [];

 		while ($row = $result->fetch_assoc()) {
 			$list[] = $row;
 		}

 		return $list;

 	}

 	public function getBlog(){
 		$result = $this->selectDb("blog");

 		$list = [];

 		while ($row = $result->fetch_assoc()) {
 			$list[] = $row;
 		}

 		return $list;
 	}

 	public function getBlogDetail($id){

 		$result = $this->selectDbById("blog",$id);

 		$list = [];

 		while ($row = $result->fetch_assoc()) {
 			$list[] = $row;
 		}

 		return $list;
 	}

 	public function getBlogByCategory($category_id){
 		$result = $this->selectDbByCategory($category_id);

 		$list = [];

 		while ($row = $result->fetch_assoc()) {
 			$list[] = $row;
 		}

 		return $list;
 	}

 	public function getCategoryName($id){

 		$result = $this->selectDbById("category",$id);

 		$list = [];

 		while ($row = $result->fetch_assoc()) {

 			return $row['name'];
 			
 		}

 	}
}
