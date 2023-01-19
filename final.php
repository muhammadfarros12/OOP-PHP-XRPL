<?php

// final class FinalClass{}

// class ChildClass extends FinalClass{}

class FinalClass {
  final public function finalMethod(){}
}

class ChildClass extends FinalClass{
  public function finalMethod(){
    
  }
}
