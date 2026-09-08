<?php

$array = array(1, 2, 3, 4);

$first = array_shift($array);
array_push($array, $first);

echo "Rotated Array: ";
print_r($array);

?>