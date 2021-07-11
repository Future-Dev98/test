<?php
require LIBS.'/autoload.php';

autoload($controller, $action);

function view($controller, $action){

	if(is_file(VEIW_PATH."/".$controller."/".$action.".php")){

		return $controller."/".$action.".php";

	}

	return "layout/404.php";
	
}
