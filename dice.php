<?php
$min = 1;
$MAX = 6;

echo "What is your name? > ";
$name = trim(fgets(STDIN));
echo "Hello, $name ! \n";

echo "Rolling the dice... \n";

$D1 = mt_rand($min,$MAX);
$D2 = mt_rand($min,$MAX);
$sum = $D1 + $D2;

echo "Die 1 : $D1 \n";
echo "Die 2 : $D2 \n";
echo "Total value : $sum \n";

if($sum > 7) echo "$name won \n";
else echo "$name lost \n";

?>