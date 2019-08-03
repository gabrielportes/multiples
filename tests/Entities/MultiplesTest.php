<?php

namespace Multiples\Tests\Entities;

use Multiples\Entities\Multiples;
use PHPUnit\Framework\TestCase;

class MultiplesTest extends TestCase
{

    public function testIfTestMultipleReturnsInt()
    {
        $multiples = new Multiples();
        $this->assertIsNumeric($multiples->testMultiple(1));
        $this->assertIsNumeric($multiples->testMultiple(2));
    }

    public function testIfTestMultipleReturnsString()
    {
        $multiples = new Multiples();
        $this->assertIsString($multiples->testMultiple(3));
        $this->assertIsString($multiples->testMultiple(5));
        $this->assertIsString($multiples->testMultiple(6));
        $this->assertIsString($multiples->testMultiple(10));
        $this->assertIsString($multiples->testMultiple(15));
        $this->assertIsString($multiples->testMultiple(30));
    }

    public function testIfTestMultipleReturnsLinio()
    {
        $multiples = new Multiples();
        $this->assertEquals('Linio', $multiples->testMultiple(3));
        $this->assertEquals('Linio', $multiples->testMultiple(6));
    }

    public function testIfTestMultipleReturnsIT()
    {
        $multiples = new Multiples();
        $this->assertEquals('IT', $multiples->testMultiple(5));
        $this->assertEquals('IT', $multiples->testMultiple(10));
    }

    public function testIfTestMultipleReturnsLinianos()
    {
        $multiples = new Multiples();
        $this->assertEquals('Linianos', $multiples->testMultiple(15));
        $this->assertEquals('Linianos', $multiples->testMultiple(30));
    }
}
