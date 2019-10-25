<?php

require(dirname(__DIR__) . '/functions/isPrime.php');

$maxInteger = $argv[1];

$rollingTotal = 0;

for ($i = 2; $i < $maxInteger; $i++) {
    if (isPrime($i)) {
        $rollingTotal += $i;
    }
}

echo "The sum of the primes below $maxInteger is $rollingTotal";