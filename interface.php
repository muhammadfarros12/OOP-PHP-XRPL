 <?php

interface Vehicle{
  public function drive();

  public function setWheels($wheels);
}
interface Body{
  public function setSurface($surface);
}
class Car implements Vehicle, Body{
  private $wheels;
  private $surface;
  public function drive(){
    // menggunakan setir
    // menginjak gas
  }
  public function setSurface($surface){
    $this -> surface = $surface;
  }
  public function setWheels($wheels){
    $this -> wheels = $wheels;
  }
}

class motorCycle implements Vehicle, Body{
  private $wheels;
  private $surface;
  public function drive(){
    // seimbangkan motor
    // tarik gas
  }
  public function setSurface($surface){
    $this -> surface = $surface;
  }
  public function setWheels($wheels){
    $this -> wheels = $wheels;
  }
}

$car = new Car;
$car -> drive();

$vehicle = new Vehicle;
$vehicle -> drive();




