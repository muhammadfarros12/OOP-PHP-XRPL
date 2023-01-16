<?php
class Faktorial {
  public static function nonRecursive(int $number) {
    $result = 1;
    
    for ($i = 1; $i <= $number; $i++) {
      $result *= $i;
    }
      return $result;
    }
}
echo Faktorial::nonRecursive(4);
echo PHP_EOL;

