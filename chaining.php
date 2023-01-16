<?php
class Robot{
  public $suara;
  public $berat;

  public function set_suara($suara){
    $this -> suara = $suara;
    return $this;
  }

  public function set_berat($berat){
    $this -> berat = $berat;
    return $this;
  }
}

$robot = new Robot();
$robot -> set_suara('method chaining')->set_berat(20);

echo $robot -> suara . ' - ' . $robot -> berat;
echo PHP_EOL;
