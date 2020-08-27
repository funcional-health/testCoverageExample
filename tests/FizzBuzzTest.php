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

    public function testFizzBuzzShouldReturnEmptyStringForEveryNumberNotMultipleOf3And5()
    {
        $fizzBuzz = new FizzBuzz();
	    $this->assertEquals("", $fizzBuzz->processNumber(1));
    }

    public function testFizzBuzzShouldReturnFizzFor3()
    {
        $fizzBuzz = new FizzBuzz();
	    $this->assertEquals("Fizz", $fizzBuzz->processNumber(3));
    }

    public function testFizzBuzzShouldReturnBuzzFor5()
    {
        $fizzBuzz = new FizzBuzz();
	    $this->assertEquals("Buzz", $fizzBuzz->processNumber(5));
    }

    public function testDivisibleBy3ShouldReturnFizzForEveryMultipleOf3()
    {
        $fizzBuzz = new FizzBuzz();
        $this->assertEquals("Fizz", $fizzBuzz->divisibleBy3(9));
    }

    public function testDivisibleBy5ShouldReturnBuzzForEveryMultipleOf5()
    {
        $fizzBuzz = new FizzBuzz();
        $this->assertEquals("Buzz", $fizzBuzz->divisibleBy5(25));
    }

    public function testDivisibleBy3ShouldReturnFizzFor3()
    {
        $fizzBuzz = new FizzBuzz();
        $this->assertEquals("Fizz", $fizzBuzz->divisibleBy3(3));
    }

    public function testDivisibleBy5ShouldReturnFizzFor5()
    {
        $fizzBuzz = new FizzBuzz();
        $this->assertEquals("Buzz", $fizzBuzz->divisibleBy5(5));
    }

    public function testDivisibleBy3ShouldReturnEmptyStringEveryNumberNotMultipleOf3()
    {
        $fizzBuzz = new FizzBuzz();
        $this->assertEquals("", $fizzBuzz->divisibleBy3(2));
    }

    public function testDivisibleBy5ShouldReturnEmptyStringEveryNumberNotMultipleOf5()
    {
        $fizzBuzz = new FizzBuzz();
        $this->assertEquals("", $fizzBuzz->divisibleBy5(2));
    }
}
