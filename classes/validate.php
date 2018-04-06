<?php

class Validate{
	private $_passed = false,
			$_errors = array(),
			$_db	 = null;

	public function __construct(){
		$this->_db = db::getInstance();
	}


	public function check($source, $items = array()){
		foreach ($items as $item => $rules) {
			foreach ($rules as $rule => $rule_value) {

				$value = trim($source[$item]);
				$item = escape($item);

				if ($rule === 'required' && empty($value)) {
					$this->addError("<p class=\"text-danger text-center\"> {$item} is required </p> <br>");
				}else {
					switch($rule){
						case 'min':
							if(strlen($value) < $rule_value){
									$this->addError("<p class=\"text-danger text-center\"> {$item} must be a minimum of {$rule_value} characters.</p> <br>") ;
							}
						break;
						case 'max':
							if(strlen($value) > $rule_value){
									$this->addError("<p class=\"text-danger text-center\"> {$item} must be a maximum of {$rule_value} characters.</p><br>");
							}
						break;
						case 'matches':
							if($value != $source[$rule_value]){
								$this->addError("<p class=\"text-danger text-center\"> {$rule_value}s must match </p><br> ");
							}
						break;
						case 'unique':
							$check = $this->_db->get($rule_value, array($item, '=', $value));
							if ($check->count()) {
								$this->addError("<p class=\"text-danger text-center\"> {$item} already exists. </p><br>");
							}
						break;
					}
				}
			}
		}

		if (empty($this->_errors)) {
			$this->_passed = true;
		}

		return $this;
	}	


	private function addError($error){
		$this->_errors[] = $error;
	}


	public function errors(){
		return $this->_errors;
	}


	public function passed(){
		return $this->_passed;
	}
}
