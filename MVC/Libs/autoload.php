<?php
function autoload($controller, $action){

	//Gọi model tổng
	require MODEL_PATH.'Model.php';

	if(is_file(COBTROLLER_PATH.$controller.'.php')){
		require COBTROLLER_PATH.$controller.'.php';
	}
	
	//Gọi file controller và action tưởng ứng sau khi check ok

	if(is_file(COBTROLLER_PATH.$controller.'/'.$action.'.php')){
		require COBTROLLER_PATH.$controller.'/'.$action.'.php';
	}

	if(is_file(COBTROLLER_PATH.'action/'.$action.'.php')){
		require COBTROLLER_PATH.'action/'.$action.'.php';
	}

	require COBTROLLER_PATH."helper.php";

	require VEIW_PATH.'/view.php';

	return true;
}