<?php

class Category extends Model{

	public function getCategory(){

	 	$result = $this->selectDb("category");

	 	$list = [];

	 	while($row = $result->fetch_assoc()){

	 		$list[] = $row;

	 	}

	 	return $list;

	}

}
