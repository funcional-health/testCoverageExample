<?php

use PHPUnit\Framework\TestCase;

class MyClassTest extends TestCase
{
    public function testABWhenA()
    {
        $myClass = new MyClass();
        $this->assertEquals("a", $myClass->ab("a", ""));
    }

    public function testABWhenB()
    {
        $myClass = new MyClass();
        $this->assertEquals("b", $myClass->ab("", "b"));
    }

    public function testABWhenAB()
    {
        $myClass = new MyClass();
        $this->assertEquals("ab", $myClass->ab("a", "b"));
    }

    public function testABWhenNotAOrB()
    {
        $myClass = new MyClass();
        $this->assertEquals("", $myClass->ab("c", "d"));
    }

}
