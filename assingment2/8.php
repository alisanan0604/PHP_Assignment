<?php

$str1 = "ABCD";
$str2 = "XY";

$result = substr($str1, 0, 2) . $str2 . substr($str1, 2);

echo "Result: " . $result;

?>