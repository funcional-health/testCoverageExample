<?php

class FizzBuzz
{
    public function processNumber ($number)
    {
        $result = "";

        if ($number%3 == 0) {
            $result .= "Fizz";
	}

	if ($number%5 == 0) {
             $result .= "Buzz";
	}

	return $result;
    }
}
