<?php

use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    public function testFizzBuzzShouldReturnFizzForEveryMultipleOf3()
    {
        $fizzBuzz = new FizzBuzz();
	$this->assertEquals("Fizz", $fizzBuzz->processNumber(9));
    }
}
