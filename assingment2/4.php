<?php

$str = "hello";

$length = strlen($str);

if ($length < 3) {
    echo strtoupper($str);
} else {
    echo substr($str, 0, $length - 3) . strtoupper(substr($str, -3));
}

?>