<?php
function introduce($fullname, $action) {
    $fullname = $action($fullname);
    return "Perkenalkan nama saya adalah $fullname";
}

echo introduce("maul", function ($fullname) { 
  return strtoupper($fullname); 
});
echo PHP_EOL;

