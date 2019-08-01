<?php
namespace Gabriel\Multiples\Entities;

class Multiples
{
	const OPTIONS = [
		'Linio',
		'IT',
		'Linianos'
	];
	
    /**
     * Print all numbers from 1 to $to
     * 
     * @param int $to last number to print
     */
	public function printNumbers(int $to)
	{
		$from = 1;
		foreach (range($from, $to) as $number) {			
			echo self::testMultiple($number), '<br>';
		}        
	}
	
    /**
     * Test if a number is multiple of 3, 5 or both at same time
     * 
     * @param int $number number to test
     * @return string
     * - When $number is multiple of 3, return the word "Linio"
     * - When $number is multiple of 5, return the word "IT" 
     * - When $number is multiple of 3 and 5, at same time, return the word "Linianos"
     * - Otherwise returns $number
     */
	protected static function testMultiple(int $number): string
	{
		$mod3 = intval(bcmod($number, 3));
		$mod5 = intval(bcmod($number, 5));
		$arrRemainders = [$mod3, $mod5, ($mod3 + $mod5)];
		
		for  ($i = 0; $i < count(self::OPTIONS); $i++) {
			if ($arrRemainders[$i] === 0) {
				return (string) self::OPTIONS[$i];
			}
		}
		
		return (string) $number;
	}
}
?>