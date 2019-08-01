<?php
    namespace Gabriel\Multiples\Entities;

    class Multiples{
        private $count              = 1;
        private $arrayTextOptions   = array("Linio", "IT", "Linianos");

        // Print all the numbers from 1 to 100
        public function printNumbers($size){
            for($i=0; $i<$size; $i++){
                $count = $this->getCount();
        
                echo $this->testMultiple($count), "<br>";
                $this->setCount(++$count);
            }        
        }
        
        // Test if a number is multiple of 3, 5 or both at same time
        // - For multiples of 3, instead of the number, print "Linio" 
        // - For multiples of 5, instead of the number, print "IT" 
        // - For numbers, which are multiples of both 3 and 5, print "Linianos" 
        public function testMultiple($number){
            $arrayTextOptions   = $this->getArrayTextOptions();
            $mod3               = $this->calculatesRemainder($number, 3);
            $mod5               = $this->calculatesRemainder($number, 5);
            $arrayMod           = array($mod3, $mod5, $mod3+$mod5);
            $print              = $number;

            for($i=0; $i<count($arrayTextOptions); $i++){
                if( $arrayMod[$i] === 0 )
                    $print = $arrayTextOptions[$i]; 
            }
            
            return $print;
        }

        // Caculates the remainder of a division
        public function calculatesRemainder($dividend, $divisor){
            return $dividend % $divisor;
        }

        public function getCount(){
            return $this->count;
        }

        public function setCount($count){
            $this->count = $count;
        }

        public function getArrayTextOptions(){
            return $this->arrayTextOptions;
        }
    }
?>