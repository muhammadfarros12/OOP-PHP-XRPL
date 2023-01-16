<?php
class ParameterCasting{
  public function __construct(array $arrayType) { }
  public function stringCast(string $stringType) { }
  public function intCast(int $intType){ }
  public function floatCast(float $floatType){ }
  public function booleanCast(bool $booleanType) { }
}

$object = new ParameterCasting(array());

