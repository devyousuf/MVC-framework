<?php  
	include_once "system/libs/Main.php";
	include_once "system/libs/Load.php";
	include_once "system/libs/TController.php";

	if (isset($_GET['url'])) {
		$url = $_GET['url'];
		$url = rtrim($url,"/");
		$url = explode("/", filter_var($url,FILTER_SANITIZE_URL));
		
		include "app/controllers/".$url[0].".php";
		$ctrl = new $url[0]();
		if (isset($url[2])) {
			$ctrl->$url[1]($url[2]);
		}else {
			if (isset($url[1])) {
				$ctrl->$url[1]();
			}else {

			}
		}
		
	}else {
		include "app/controllers/Index.php";
		$ctrl = new Index();
		$ctrl->Home();
	}
	


?>

















