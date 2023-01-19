<?php
class PPH21Calculator{
  private function firstRule(float $pkp):float{
    if (0 < $pkp && 50000000 >= $pkp){
      return $pkp * 0.05;
    }
    return 0;
  }
  private function secondRule(float $pkp):float{
    if (50000000 < $pkp && 250000000 >= $pkp){
      return $pkp * 0.15;
    }
    return 0;
  }
  private function thirdRule(float $pkp):float{
    if (250000000 < $pkp && 500000000 >= $pkp){
      return $pkp * 0.25;
    }
    return 0;
  }
  private function fourthRule(float $pkp):float{
    if (500000000 < $pkp && 100000000000 >= $pkp){
      return $pkp * 0.3;
    }
    return 0;
  }
  public function calculate(float $pkp):float{
    return $this -> firstRule($pkp) ?: $this -> secondRule($pkp) ?: $this -> thirdRule($pkp) ?: fourthRule($pkp);
  }
}

$pph21 = new PPH21Calculator;

echo $pph21 -> calculate(25000000).PHP_EOL;
