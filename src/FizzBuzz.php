<?php

class FizzBuzz
{
    public function processNumber ($number) : string
    {
        $result = "";

        $result .= $this->divisibleBy3($number);

        $result .= $this->divisibleBy5($number);

	    return $result;
    }

    public function divisibleBy3 (int $number) : string
    {
        $result = ($number%3 == 0) ? "Fizz" : "";
        return $result;
    }

    public function divisibleBy5 (int $number) : string
    {
        $result = ($number%5 == 0) ? "Buzz" : "";
        return $result;
    }
}
