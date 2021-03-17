<?php

declare(strict_types=1);

namespace Multiples\Entities;

/**
 * @author Gabriel Portes <gabrielportesv@gmail.com>
 * @version 1.0.0
 */
class MultiplesUsingSwitch
{
	/**
	 * Print all numbers from 1 to $to.
	 * 
	 * @param int $to last number to print
	 * @return void
	 */
	public function printNumbers(int $to): void
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
		switch ($number) {
			case $this->isMultipleOf($number, 3) && $this->isMultipleOf($number, 5):
				$number = 'Superlógica';
				break;
			case $this->isMultipleOf($number, 3):
				$number = 'Super';
				break;
			case $this->isMultipleOf($number, 5):
				$number = 'Lógica';
				break;
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
