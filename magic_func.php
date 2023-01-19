<?php
class Device {
    public $name;           // the name of the device
    public $battery;        // holds a Battery object
    public $data = array(); // stores misc. data in an array
    public $connection;     // holds some connection resource

    public function __construct(Battery $battery, $name){
      $this -> battery = $battery;
      $this -> name = $name;
      $this -> connect();
    }

    public function __destruct(){
      $this -> disconnect();
      echo $this -> name . ' Was Destroyed' . PHP_EOL;
    }

    public function __get($name){
      if(array_key_exists($name, $this -> data)){
        return $this -> data[$name];
      } else {
        return null;
      }
    }
  
    protected function connect() {
        // connect to some external network
        $this->connection = 'resource';
        echo $this->name . ' connected' . PHP_EOL;
    }

    protected function disconnect() {
        // safely disconnect from network
        $this->connection = null;
        echo $this->name . ' disconnected' . PHP_EOL;
    }
}

class Battery {
    private $charge = 0;

    public function __get($name){
      if(isset($this -> $name)){
        return $this -> $name;
      } else {
        return null;
      }
    }

    public function setCharge($charge) {
        $charge = (int)$charge;
        if($charge < 0) {
            $charge = 0;
        }
        elseif($charge > 100) {
            $charge = 100;
        }
        $this->charge = $charge;
    }
}

$device = new Device(new Battery, 'iPad');
echo $device -> name;
echo PHP_EOL;
