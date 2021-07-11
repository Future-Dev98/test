<?php
class Blog extends Model{

	public function getBlog(){

	 	$result = $this->selectDb("blog");

	 	$list = [];

	 	while($row = $result->fetch_assoc()){

	 		$list[] = $row;

	 	}

	 	return $list;

	}

}
