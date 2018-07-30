<?php  
/**
* Form validation
*/
class Dform {
	public $currentValue;
	public $values = array();
	public $errors = array();
	function __construct(){
		
	}
	public function post($key){
		$this->values[$key] = trim($_POST[$key]);
		$this->currentValue = $key;
		return $this;
	}
	public function isEmpty(){
		if (empty($this->values[$this->currentValue])) {
			$this->errors[$this->currentValue]['empty'] = "Field Must Not Be Empty";
		}
		return $this;
	}
	public function Length($min=0,$max){
		if (strlen($this->values[$this->currentValue]) < $min OR strlen($this->values[$this->currentValue]) >$max ) {
			$this->errors[$this->currentValue]['length'] = "Should Min ".$min." And Max".$max." Characters" ;
		}
		return $this;
	}
	public function submit(){
		if (empty($this->errors)) {
			return true;
		}else {
			return false;
		}
	}
}
?>