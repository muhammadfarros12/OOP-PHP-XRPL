<?php
function loop(int $value){
  if($value == 0){
    echo 'selesai';
  } else {
    echo 'perulangan ke-'.$value;
    echo PHP_EOL;
    loop($value - 1);
  }
}

loop(1000000);
echo PHP_EOL;
