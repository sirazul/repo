<?php
require_once 'vendor/autoload.php';



/**
 * 
 *  Runs ClassifyTwoIntegers 
 *  with 1-100 
 *  to show it working
 *  
 * 
 */


$classifierDriver = new ClassifyTwoIntegers();

// first integer
$first = 1;

do {

    // create second integer
    $second = $first++; 

    // classify from first to second
    $classifierDriver->classify($first, $second);
    
    // get next series 
    $first++;
    
} while ($first < 101);

