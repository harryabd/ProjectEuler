<?php

namespace NumberProblems\Test;

use NumberProblems\NumberUtils\PrimeNumbers;
use PHPUnit\Framework\TestCase;

class isPrimeTest extends TestCase
{
    public function testIsPrime() {
        $this->assertEquals(false, PrimeNumbers::isPrime(1));
        $this->assertEquals(true, PrimeNumbers::isPrime(2));
        $this->assertEquals(true, PrimeNumbers::isPrime(3));
        $this->assertEquals(false, PrimeNumbers::isPrime(4));
        $this->assertEquals(true, PrimeNumbers::isPrime(19));
    }
}
