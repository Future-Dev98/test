<?php

class edit extends Model{

	public function getCategoryById($id){

		$result = $this->selectDbById("category",$id);

		$list = [];

		while($row = $result->fetch_assoc()){

			$list[] = $row;

		}

		return $list;


	}

	public function getBlog($id){

		$result = $this->selectDbById("blog",$id);

		$list = [];

		while($row = $result->fetch_assoc()){

			$list[] = $row;

		}

		return $list;


	}

	public function editCategory($name, $id){

			return $this->updateCategory($name,$id);

	}

} 