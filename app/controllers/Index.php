<?php  
/**
* Index controller
*/
class Index extends TController {
	
	function __construct(){
		parent::__construct();
	}
	// for home
	public function Home(){
		$this->load->view("home");
		$catmodel=$this->load->model("Catmodel");
	}
	

}
?>