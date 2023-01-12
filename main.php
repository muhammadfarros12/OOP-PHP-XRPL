<?php
class Fruit {
  public $name;
  public $color;

  function __construct($name) {
    $this -> name = $name; 
  }

  function __destruct(){
    echo 'ini akhir test';
  }
  
  function get_name() {
    return $this -> name;
  }
}

$apple = new Fruit("Apple");
echo 'apa';
echo PHP_EOL;
echo $apple -> get_name();
echo PHP_EOL;

