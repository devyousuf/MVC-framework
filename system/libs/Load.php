<?php  
/**
* Load class
*/
class Load {
	
	function __construct(){
		
	}
	// for view
	public function view($filename,$data = false){
		if ($data == true) {
			extract($data);
		}
		include "app/views/".$filename.".php";
	}
	// for model
	public function model($filename){
		include "app/models/".$filename.".php";
		return new $filename();
	}
}
?>