<?php

abstract class Vehicle{

  private $wheels;

  abstract public function drive();

  public function setWheels($wheels){
    $this -> wheels = $wheels;
  }
  
}
class Car extends Vehicle{
  public function drive(){
    // menggunakan setir
    // menginjak gas
  }
}

class motorCycle extends Vehicle{
  public function drive(){
    // seimbangkan motor
    // tarik gas
  }
}

$car = new Car;
$car -> drive();

$vehicle = new Vehicle;
$vehicle -> drive();




