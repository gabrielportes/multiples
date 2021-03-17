<?php

namespace Multiples\Entities;

/**
 * @author Gabriel Portes <gabriel-portes@hotmail.com>
 * @version 1.0.0
 */
class Multiples
{
	/**
	 * Options that I should use to print instead of the real number.
	 * @var array
	 */
	const OPTIONS = [
		'Superlógica', // multiples of 3 and 5 at same time
		'Super', // multiples of 3
		'Lógica' // multiples of 5
	];

	/**
	 * Print all numbers from 1 to $to.
	 * 
	 * @param int $to last number to print
	 */
	public function printNumbers(int $to)
	{
		$from = 1;
		foreach (range($from, $to) as $number) {
			echo $this->testMultiple($number), "\n";
		}
	}

	/**
	 * Test if a number is multiple of 3, 5 or both at same time.
	 * 
	 * @param int $number number to test
	 * @return string
	 * - When $number is multiple of 3, return the word "Super"
	 * - When $number is multiple of 5, return the word "Lógica" 
	 * - When $number is multiple of 3 and 5, at same time, return the word "Superlógica"
	 * - Otherwise returns $number
	 */
	public function testMultiple(int $number): string
	{
		$mod3 = $this->isMultipleOf($number, 3);
		$mod5 = $this->isMultipleOf($number, 5);
		$arrRemainders = [($mod3 && $mod5), $mod3, $mod5];

		for ($i = 0; $i < count(self::OPTIONS); $i++) {
			if ($arrRemainders[$i] === true) {
				$number = self::OPTIONS[$i];
				break;
			}
		}

		return (string) $number;
	}

	/**
	 * Checks if a number is multiple of.
	 *
	 * @param  int $number
	 * @param  int $multiple
	 * @return bool
	 */
	public function isMultipleOf(int $number, int $multiple): bool
	{
		return $number % $multiple === 0;
	}
}
