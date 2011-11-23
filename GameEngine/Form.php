<?php
#################################################################################
##              -= YOU MAY NOT REMOVE OR CHANGE THIS NOTICE =-                 ##
## --------------------------------------------------------------------------- ##
##  Filename       Form.php                                                    ##
##  License:       TravianX Project                                            ##
##  Copyright:     TravianX (c) 2010-2011. All rights reserved.                ##
##                                                                             ##
#################################################################################
class Form {

	private $errorarray = array();
	public $valuearray = array();
	private $errorcount;

	public function Form(){
		if(isset($_SESSION['errorarray']) && isset($_SESSION['valuearray'])){
			$this->errorarray = $_SESSION['errorarray'];
			$this->valuearray = $_SESSION['valuearray'];
			$this->errorcount = count($this->errorarray);

			unset($_SESSION['errorarray']);
			unset($_SESSION['valuearray']);
		}
		else{$this->errorcount = 0;}
	}

	public function addError($field,$error){
		$this->errorarray[$field] = $error;
		$this->errorcount = count($this->errorarray);
	}

	public function getError($field){
		return (array_key_exists($field,$this->errorarray)) ? $this->errorarray[$field] : '';
	}

	public function getValue($field){
		return (array_key_exists($field,$this->valuearray)) ? $this->valuearray[$field] : '';
	}

	public function getDiff($field,$cookie){
		return (array_key_exists($field,$this->valuearray) && $this->valuearray[$field] != $cookie) ? $this->valuearray[$field] : $cookie;
	}

	public function getRadio($field,$value){
		return (array_key_exists($field,$this->valuearray) && $this->valuearray[$field] == $value) ? 'checked' : '';
	}

	public function returnErrors(){
		return $this->errorcount;
	}

	public function getErrors(){
		return $this->errorarray;
	}
};