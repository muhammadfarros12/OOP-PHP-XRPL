<?php

abstract class Animal {
  abstract public function sound();
}

class Duck extends Animal {
  public function sound() {
    echo 'Suara bebek adalah wkwkwk';
  }
}

class Cat extends Animal {
  public function sound() {
    echo 'Suara Kucing adalah Miaw';
  }
}

$duck = new Duck;
$cat = new Cat;

$duck -> sound();
echo PHP_EOL;
$cat -> sound();
echo PHP_EOL;

// function sound($animalSound) {
//   foreach($animalSound as $test){
//     echo $test -> sound().PHP_EOL;
//   }
// }

// $animalSound = [
//   new Duck,
//   new Cat
// ];

// sound($animalSound);


