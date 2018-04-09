<?php
declare(strict_types=1);

use Numbers\DivideByRule;
use Numbers\DivideByThree;
use Numbers\DivideByFive;
use Numbers\NumberDivisorAbstract;

/**
 *
 * A class with a method that takes 2 integers between 1 and 100.
 * Loop from the first integer to the second integer.
 *
 * Writes out each integer.
 *
 * If the integer is divisible by 3 also print out “Rule 3 Hit”
 * If the integer is divisible by 5 also print out “Rule 5 Hit”
 *
 *
 */
final class ClassifyTwoIntegers
{

    /**
     *
     *  object that will find divide by 3's
     *
     */
    private $_divideByThree;

    /**
     *
     *  object that will find divide by 5's
     *
     */
    private $_divideByFive;

    /**
     *
     *  result of object in string form
     *
     */
    private $_resultOfObject;

    public function __construct()
    {
        $this->_divideByThree = new DivideByRule(new DivideByThree());
        $this->_divideByFive = new DivideByRule(new DivideByFive());
        $this->_resultOfObject = "";
    }

    /**
     *
     *
     * classify number either divisable by 5 or 3
     *
     * @param int - number to classify
     *
     * @return - string - message specific to success of classification
     *
     */
    public function classify(int $firstInteger, int $secondInteger)
    {
        $this->_resultOfObject = "";

        // create list to iterate through first to second integer
        $list = [ $secondInteger, $firstInteger ];

        foreach ($list as $number) {
            if ($this->_divideByThree->applyRule($number)) {

                echo "$number " . $this->_divideByThree->getMessage();
                $this->_resultOfObject = "$number " . $this->_divideByThree->getMessage();

            } elseif ($this->_divideByFive->applyRule($number)) {

                echo "$number " . $this->_divideByFive->getMessage();
                $this->_resultOfObject .= "$number " . $this->_divideByFive->getMessage();

            } else {

                echo "$number";
                $this->_resultOfObject = "$number ";
            }

            // new line for next result
            echo "\r\n";
        }
    }

    // result of this operation  (for testing)
    public function __toString() : string
    {
        return $this->_resultOfObject;
    }
}
