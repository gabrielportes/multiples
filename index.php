<?php
/**
 * For this resolution I considered that it was not allowed to use even `switch case`.
 */
require_once './vendor/autoload.php';

use Multiples\Entities\Multiples;

$multiples = new Multiples();
$multiples->printNumbers(100); // print all the numbers from 1 to 100 
