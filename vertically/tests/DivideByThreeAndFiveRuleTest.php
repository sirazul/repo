<?php
declare(strict_types=1);
require_once 'vendor/autoload.php';


use PHPUnit\Framework\TestCase;
use Numbers\DivideByFive;
use Numbers\DivideByThree;



final class DivideByThreeAndFiveRuleTest extends TestCase
{
    /**
     *
     *  creates by 3 and 5 rule objects
     *
     *  checks for their message and rule number
     *
     */
    public function testRuleFive(): void
    {
        $obj = new DivideByFive();
        $this->assertEquals(
            5,                  // expected
            $obj->getRule()     // actual
        );
    }


    public function testRule5Message(): void
    {
        $obj = new DivideByFive();
        $this->assertEquals(
            'Rule 5 Hit',                     // expected
            $obj->getRulesMessage()     // actual
        );
    }


    public function testRuleThree(): void
    {
        $obj = new DivideByThree();
        $this->assertEquals(
            3,                  // expected
            $obj->getRule()     // actual
        );
    }


    public function testRuleThreeMessage(): void
    {
        $obj = new DivideByThree();
        $this->assertEquals(
            'Rule 3 Hit',                     // expected
            $obj->getRulesMessage()     // actual
        );
    }
}
