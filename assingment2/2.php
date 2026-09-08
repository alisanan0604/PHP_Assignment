<?php

$a = 85;
$b = 110;

$diff1 = abs(100 - $a);
$diff2 = abs(100 - $b);

if ($diff1 == $diff2) {
    echo "0";
}
elseif ($diff1 < $diff2) {
    echo "$a is nearest to 100";
}
else {
    echo "$b is nearest to 100";
}

?>