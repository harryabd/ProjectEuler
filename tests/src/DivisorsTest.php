<?php

namespace NumberProblems\Test;

use NumberProblems\NumberUtils\Divisors;
use PHPUnit\Framework\TestCase;

class DivisorsTest extends TestCase
{
    public function testGetDivisors() {
        $this->assertEquals([1], Divisors::getDivisors(1));
        $this->assertEquals([1, 2], Divisors::getDivisors(2));
        $this->assertEquals([1, 3], Divisors::getDivisors(3));
        $this->assertEquals([1, 2, 4, 7, 14, 28], Divisors::getDivisors(28));
        $this->assertEquals([1, 2, 3, 4, 6, 9, 12, 18, 27, 36, 54, 108], Divisors::getDivisors(108));
    }

    public function testGetNumberOfDivisors() {
        $this->assertEquals(1, Divisors::getNumberOfDivisors(1));
        $this->assertEquals(2, Divisors::getNumberOfDivisors(2));
        $this->assertEquals(2, Divisors::getNumberOfDivisors(3));
        $this->assertEquals(6, Divisors::getNumberOfDivisors(28));
        $this->assertEquals(12, Divisors::getNumberOfDivisors(108));
    }
}
