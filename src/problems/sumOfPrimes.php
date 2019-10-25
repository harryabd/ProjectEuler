<?php

require_once(__DIR__ . '/../../vendor/autoload.php');

use NumberProblems\NumberUtils\PrimeNumbers;

$maxInteger = $argv[1];

$rollingTotal = 0;

for ($i = 2; $i < $maxInteger; $i++) {
    if (PrimeNumbers::isPrime($i)) {
        $rollingTotal += $i;
    }
}

echo "The sum of the primes below $maxInteger is $rollingTotal";