<?php

require_once(__DIR__ . '/../../vendor/autoload.php');

use NumberProblems\NumberUtils\Divisors;

$requiredNumberOfDivisors = $argv[1];

$hasRequiredNumberOfDivisors = false;

$number = 0;
$maxNumberOfDivisors = 0;
for ($i = 1; !$hasRequiredNumberOfDivisors; $i++) {
    $number += $i;
    $numberOfDivisors = Divisors::getNumberOfDivisors($number);
    if ($numberOfDivisors > 100) {
        $maxNumberOfDivisors = $numberOfDivisors;
        echo "Number: $number, Number of divisors: $numberOfDivisors\n";
    }
    if ($numberOfDivisors >= $requiredNumberOfDivisors) {
        $hasRequiredNumberOfDivisors = true;
    }
}

echo "The first triangular number to have $requiredNumberOfDivisors divisors is $number";