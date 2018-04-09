<?php
declare(strict_types=1);
require_once 'vendor/autoload.php';

use PHPUnit\Framework\TestCase;

use Numbers\DivideByRule;
use Numbers\DivideByThree;
use Numbers\DivideByFive;




/*
spl_autoload_register(function ($class)
{
    include_once 'src/' . $class . '.php';
    include_once 'src/Numbers/' . $class . '.php';
});

*/

final class DivideByRuleTest extends TestCase
{

    /**
     *
     * new created object with current rules message
     * set to empty string
     *
     *
     */
    public function testObjectsCreatedByRulesForFive(): void
    {
        $obj5 = new  DivideByRule(new DivideByFive());
        $this->assertEquals(
            $obj5->getMessage(),         // expected
            ''                         // actual
        );
    }

    /**
     *
     * new created object with current rules message
     * set to empty string
     *
     *
     */
    public function testObjectsCreatedByRulesForThree(): void
    {
        $obj3 = new  DivideByRule(new DivideByThree());
        $this->assertEquals(
            $obj3->getMessage(),         // expected
            ''                         // actual
        );
    }
    

    /**
     *
     *  valid numbers of divide by 3
     *
     */
    public function testClassifyDivByThreeNumbers(): void
    {
        $divBy3Data = [ 3, 6, 99, 33, 66 ];

        $objDivByRuleThree = new  DivideByRule(new DivideByThree());

        // all valid class divisable by 3
        foreach ($divBy3Data as $number) {
            $this->assertTrue($objDivByRuleThree->applyRule($number));
            $this->assertEquals($objDivByRuleThree->getMessage(), 'Rule 3 Hit');
        }
    }


    /**
     *
     * valid numbers of divide by 5
     *
     *
     */
    public function testClassifyDivByFiveNumbers(): void
    {
        $divBy5Data = [ 5,10,55,95,100 ];

        $objDivByRuleFive = new  DivideByRule(new DivideByFive());

        
        foreach ($divBy5Data as $number) {
            $this->assertTrue($objDivByRuleFive->applyRule($number));
            $this->assertEquals($objDivByRuleFive->getMessage(), 'Rule 5 Hit');
        }
    }


    /**
     *
     * numbers not divided by 3
     *
     */
    public function testNotClassifyDivByThreeNumbers(): void
    {
        $divByNonDivAble = [ 1,2,19,23,89,97 ];

        $objDivByRuleThree = new  DivideByRule(new DivideByThree());

     
        foreach ($divByNonDivAble as $number) {
            $this->assertFalse($objDivByRuleThree->applyRule($number));
            $this->assertEquals($objDivByRuleThree->getMessage(), '');
        }
    }

    /**
     *
     * numbers not divided by 5
     *
     *
     */
    public function testNotClassifyDivBy5Numbers(): void
    {
        $divByNonDivAble = [ 1,2,19,23,89,97 ];

        $objDivByRuleFive = new  DivideByRule(new DivideByFive());

        foreach ($divByNonDivAble as $number) {
            $this->assertFalse($objDivByRuleFive->applyRule($number));
            $this->assertEquals($objDivByRuleFive->getMessage(), '');
        }
    }
}
