<?php

$numberOfNumbers = $argv[1];
$sumOfSquares = $sum = 0;

for ($i = 1; $i <= $numberOfNumbers; $i++) {
    $sumOfSquares += pow($i, 2);
    $sum += $i;
}

$squareOfSum = pow($sum, 2);

$difference = abs($squareOfSum - $sumOfSquares);

echo "Difference between the square of the sum of the first $numberOfNumbers natural numbers is $difference";