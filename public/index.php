<?php
    require_once "../vendor/autoload.php";

    use Gabriel\Multiples\Entities\Multiples;
    
    $multiples = new Multiples();
    $multiples->printNumbers(100); // print all the numbers from 1 to 100 
?>