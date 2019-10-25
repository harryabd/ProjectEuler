<?php

function isPrime(int $number) : bool {
    if ($number === 2 || $number === 3) {
        return true;
    }
    for ($i = 2; $i < sqrt($number) + 1; $i++) {
        if (is_integer($number / $i)) {
            return false;
        }
    }
    return true;
}