<?php
function mean() { 
    $args = func_get_args();
    return array_sum($args) / count($args); 
} 
 
echo mean(1, 2, 6).PHP_EOL; 

function sum(...$args){
  return $args[0] + $args[2];
}
echo sum(1,3,5);

