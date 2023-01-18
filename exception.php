<?php
function checkNum($number, $number2) {
  if($number == 0 || $number2 == 0) {
    throw new Exception("Value must be 1 or above");
  } else {
   return $number % $number2; 
  }
}

try {
  echo checkNum(10 , 8);
}

catch(Exception $e) {
  echo 'Message: ' .$e->getMessage();
}
