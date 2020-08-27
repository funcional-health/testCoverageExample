<?php

class MyClass
{
    public function ab($a, $b) 
    {
        $result = "";

        if ($a == "a" || $b == "b") {
            $result .= $a . "" . $b;
        }

        return $result;
    }
}