<?php

$str = "Football";

if (substr($str, 0, 1) == "F" && substr($str, -1) == "B") {
    echo "FizzBuzz";
}
elseif (substr($str, 0, 1) == "F") {
    echo "Fizz";
}
elseif (substr($str, -1) == "B") {
    echo "Buzz";
}
else {
    echo $str;
}

?>