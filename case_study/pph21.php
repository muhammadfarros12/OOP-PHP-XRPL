<?php
interface CalculatorInterface{
  public function calculate(float $pkp): float;
  public function maxPkp(): float;
  public function minPkp(): float;
  public function taxPercentage(): float;
}

abstract class AbstractCalculator implements CalculatorInterface{
  private $chain;

  public function __construct(?CalculatorInterface $chain = null){
    $this -> chain = $chain;
  }

  public function calculate(float $pkp): float{
    $previousValue = 0;
    if($previous = $this -> chain){
      $previousValue = $this -> chain -> calculate($previous->maxPkp());
      $pkp -= $previous -> maxPkp();
    }
    return ($this -> taxPercentage() * $pkp) + $previousValue;
  }
}

class FirstRuleCalculator extends AbstractCalculator{
  public function maxPkp(): float{
    return 50000000;
  }
  public function minPkp(): float{
    return 0;
  }
  public function taxPercentage(): float{
    return 0.05;
  }
}

class SecondRuleCalculator extends AbstractCalculator{
  public function maxPkp(): float{
    return 250000000;
  }
  public function minPkp(): float{
    return 50000000;
  }
  public function taxPercentage(): float{
    return 0.15;
  }
}

class ThirdRuleCalculator extends AbstractCalculator{
  public function maxPkp(): float{
    return 500000000;
  }
  public function minPkp(): float{
    return 250000000;
  }
  public function taxPercentage(): float{
    return 0.25;
  }
}

class FourthRuleCalculator extends AbstractCalculator{
  public function maxPkp(): float{
    return 10000000000000000;
  }
  public function minPkp(): float{
    return 500000000;
  }
  public function taxPercentage(): float{
    return 0.3;
  }
}

class PPH21Calculator {
  private $calculators;

  public function __construct(CalculatorInterface ...$calculators){
    $this -> calculators = $calculators;
  }

  public function calculate(float $pkp): float{
    foreach ($this -> calculators as $calculator){
      if($pkp < $calculator -> maxPkp() && $pkp >= $calculator -> minPkp()){
        return $calculator -> calculate($pkp);
      }
    }
  }
}

$first = new FirstRuleCalculator();
$second = new SecondRuleCalculator($first);
$third = new ThirdRuleCalculator($second);
$fourth = new FourthRuleCalculator($third);

$calculator = new PPH21Calculator($first, $second, $third, $fourth);

echo $calculator -> calculate(25000000).PHP_EOL;

