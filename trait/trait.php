<?php
trait SayHello {
    public function hello() {
        return "Hello";
    }
}

class Message {
  use SayHello;
}

$say = new Message();
echo $say -> hello();
echo PHP_EOL;
