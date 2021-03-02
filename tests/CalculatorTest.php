<?php

use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase {
    // test the Calculator::add function
    public function testAdd () {
        $this->assertEquals(1, Calculator::add(0, 1));
    }

    // test the Calculator::subtract function
    public function testSubtract () {
        $this->assertEquals(2, Calculator::subtract(4, 2));
    }

    // test the Calculator::multiply function
    public function testMultiply () {
        $this->assertEquals(3, Calculator::multiply(3, 1));
    }

    // test the Calculator::divide function
    public function testDivide () {
        $this->assertEquals(4, Calculator::divide(16, 4));
    }
}
