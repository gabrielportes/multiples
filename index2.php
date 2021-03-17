<?php

declare(strict_types=1);

/**
 * For this resolution I considered that it was allowed to use `switch case`.
 */
require_once './vendor/autoload.php';

use Multiples\Entities\MultiplesUsingSwitch;

$multiples = new MultiplesUsingSwitch();
$multiples->printNumbers(100); // print all the numbers from 1 to 100 
