<?php
    namespace Gabriel\Multiples\Tests\Entities;
    
    use Gabriel\Multiples\Entities\Multiples;
    use PHPUnit\Framework\TestCase;

    class MultiplesTest extends Testcase{
    
        public function testCountReturn(){
            $multiples = new Multiples();
            $multiples->setCount(2);
            $this->assertEquals(2, $multiples->getCount());
        }

        public function testIfRemainderIsZero(){
            $multiples = new Multiples();
            $this->assertEquals(0, $multiples->calculatesRemainder(15, 3));
            $this->assertEquals(0, $multiples->calculatesRemainder(15, 5));
        }

        public function testIfRemainderIsNotZero(){
            $multiples = new Multiples();
            $this->assertNotSame(0, $multiples->calculatesRemainder(1, 3));
            $this->assertNotSame(0, $multiples->calculatesRemainder(1, 5));
        }

        public function testIfTestMultipleReturnsInt(){
            $multiples = new Multiples();
            $this->assertInternalType("int", $multiples->testMultiple(1));            
            $this->assertInternalType("int", $multiples->testMultiple(2));                        
        }

        public function testIfTestMultipleReturnsString(){
            $multiples = new Multiples();            
            $this->assertInternalType("string", $multiples->testMultiple(3));            
            $this->assertInternalType("string", $multiples->testMultiple(5));            
            $this->assertInternalType("string", $multiples->testMultiple(6));            
            $this->assertInternalType("string", $multiples->testMultiple(10));            
            $this->assertInternalType("string", $multiples->testMultiple(15));            
            $this->assertInternalType("string", $multiples->testMultiple(30));            
        }

        public function testIfTestMultipleReturnsLinio(){
            $multiples = new Multiples();
            $this->assertEquals("Linio", $multiples->testMultiple(3));            
            $this->assertEquals("Linio", $multiples->testMultiple(6));            
        }

        public function testIfTestMultipleReturnsIT(){
            $multiples = new Multiples();
            $this->assertEquals("IT", $multiples->testMultiple(5));            
            $this->assertEquals("IT", $multiples->testMultiple(10));            
        }

        public function testIfTestMultipleReturnsLinianos(){
            $multiples = new Multiples();
            $this->assertEquals("Linianos", $multiples->testMultiple(15));            
            $this->assertEquals("Linianos", $multiples->testMultiple(30));            
        }
    }
?>