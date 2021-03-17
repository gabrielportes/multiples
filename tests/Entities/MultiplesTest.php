<?php

declare(strict_types=1);

namespace Multiples\Tests\Entities;

use Multiples\Entities\Multiples;
use PHPUnit\Framework\TestCase;

/**
 * @author Gabriel Portes <gabrielportesv@gmail.com>
 * @version 1.0.0
 */
class MultiplesTest extends TestCase
{
    /**
     * Tests the method isMultipleOf.
     *
     * @return void
     */
    public function testMultipleOf(): void
    {
        $multiples = new Multiples();
        $this->assertTrue($multiples->isMultipleOf(6, 3));
        $this->assertFalse($multiples->isMultipleOf(5, 3));
    }

    /**
     * Tests if testMultiple returns the same number was send.
     *
     * @return void
     */
    public function testIfTestMultipleReturnsTheSameNumber(): void
    {
        $multiples = new Multiples();
        $this->assertEquals(1, $multiples->testMultiple(1));
        $this->assertEquals(2, $multiples->testMultiple(2));
    }
    
    /**
     * Tests if testMultiples returns the word 'Super'.
     *
     * @return void
     */
    public function testIfTestMultipleReturnsSuper(): void
    {
        $multiples = new Multiples();
        $this->assertEquals('Super', $multiples->testMultiple(3));
        $this->assertEquals('Super', $multiples->testMultiple(6));
    }

    /**
     * Tests if testMultiples returns the word 'Lógica'.
     *
     * @return void
     */
    public function testIfTestMultipleReturnsLogica(): void
    {
        $multiples = new Multiples();
        $this->assertEquals('Lógica', $multiples->testMultiple(5));
        $this->assertEquals('Lógica', $multiples->testMultiple(10));
    }

    /**
     * Tests if testMultiples returns the word 'Superlógica'.
     *
     * @return void
     */
    public function testIfTestMultipleReturnsSuperlogica(): void
    {
        $multiples = new Multiples();
        $this->assertEquals('Superlógica', $multiples->testMultiple(15));
        $this->assertEquals('Superlógica', $multiples->testMultiple(30));
    }
}
