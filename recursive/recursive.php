<?php
class Faktorial {
  public static function recursive(int $number) {
    if (2 > $number) {
      return $number;
    } else {
    return $number * self::recursive($number - 1);
    }
  }
}
echo Faktorial::recursive(100);
echo PHP_EOL;

