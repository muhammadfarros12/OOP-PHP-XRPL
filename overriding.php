<?php

class Bmw {
	public $wheels;
 
	public function getTotalWheels() {
		return $this -> wheels;
	}
 
	public function setTotalWheels($wheels) {
		$this -> wheels = $wheels;
	}
}
 
class ModifBmw extends Bmw {
	public function setTotalWheels($wheels) {
		for($i=1; $i<=10; $i++){
			echo $i.PHP_EOL;
		}
    parent::setTotalWheels($wheels);
	}
}
 
 
$modif = new ModifBmw;
$modif -> setTotalWheels(12);
echo $modif -> getTotalWheels();
echo PHP_EOL;