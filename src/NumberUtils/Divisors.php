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
            if ($number % $i == 0) {
                $divisors[] = $i;
            }
        }
        return $divisors;
    }

    public static function getNumberOfDivisors($number) {
        $count = 0;
        for ($i = 1; $i <= sqrt($number); $i++) {
            if ($number % $i == 0) {
                $count += 2;
            }
            if ($i * $i == $number) {
                $count--;
            }
        }
        return $count;
    }
}