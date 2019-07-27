<?php

use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    public function testFizzBuzzShouldReturnFizzForEveryMultipleOf3()
    {
        $fizzBuzz = new FizzBuzz();
	$this->assertEquals("Fizz", $fizzBuzz->processNumber(9));
    }

    public function testFizzBuzzShouldReturnBuzzForEveryMultipleOf5()
    {
        $fizzBuzz = new FizzBuzz();
	$this->assertEquals("Buzz", $fizzBuzz->processNumber(25));
    }

    public function testFizzBuzzShouldReturnFizzBuzzForEveryMultipleOf3And5()
    {
        $fizzBuzz = new FizzBuzz();
	$this->assertEquals("FizzBuzz", $fizzBuzz->processNumber(225));
    }
}
