<?php
trait SayHello{
  public function sayHello(){
    echo 'Halloo'.PHP_EOL;
    return $this;
  }
}

trait SayGoodBye{
  public function sayGoodBye(){
    echo 'sampai jumpa lagi';
    return $this;
  }
}

trait Greets{
  use SayHello, SayGoodBye;
}

class Message{
  use Greets;
}

$message = new Message;
$message -> sayHello() -> sayGoodBye();
