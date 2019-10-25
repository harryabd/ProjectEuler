<?php

namespace NumberProblems\NumberUtils;

/**
 * Divisors
 * 
 * Contains methods related to divisors of a number
 */
class Divisors
{
    public static function getDivisors($number) {
        $divisors = [];
        for ($i = 1; $i <= $number; $i++) {
            if (is_integer($number / $i)) {
                $divisors[] = $i;
            }
        }
        return $divisors;
    }

    public static function getNumberOfDivisors($number) {
        return count(self::getDivisors($number));
    }
}