<?php

namespace App\Tests;

use App\Service\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public function testAdditionOfPositiveNumbers()
    {
        $calculator = new Calculator();
        $this->assertEquals(4, $calculator->add(2, 2));
    }

    public function testAdditionOfPositiveNumbersWillFailed()
    {
        $calculator = new Calculator();
        $this->assertEquals(6, $calculator->add(2, 2));
    }

    public function testAdditionOfPositiveAndNegativeNumbers()
    {
        $calculator = new Calculator();
        $this->assertEquals(1, $calculator->add(2, -1));
    }

    public function testAdditionOfNegativeNumbers()
    {
        $calculator = new Calculator();
        $this->assertEquals(-5, $calculator->add(-2, -3));
    }

    public function testAdditionOfZero()
    {
        $calculator = new Calculator();
        $this->assertEquals(10, $calculator->add(10, 0));
    }

    public function testAdditionOfTwoLargeNumbers()
    {
        $calculator = new Calculator();
        $this->assertEquals(2000000000, $calculator->add(1000000000, 1000000000));
    }

    public function testDivisionOfPositiveNumbers()
    {
        $calculator = new Calculator();
        $this->assertEquals(4, $calculator->division(2, 2));
    }

    public function testDivisionOfPositiveAndNegativeNumbers()
    {
        $calculator = new Calculator();
        $this->assertEquals(1, $calculator->division(2, -1));
    }

    public function testDivisionOfNegativeNumbers()
    {
        $calculator = new Calculator();
        $this->assertEquals(-5, $calculator->division(-2, -3));
    }

    public function testDivisionByZero()
    {
        $calculator = new Calculator();
        // Assert that division by zero throws an exception
        $this->expectException(\InvalidArgumentException::class);
        $calculator->division(10, 0);
    }

    public function testDivisionOfTwoLargeNumbers()
    {
        $calculator = new Calculator();
        $this->assertEquals(2000000000, $calculator->division(1000000000, 1000000000));
    }
}
