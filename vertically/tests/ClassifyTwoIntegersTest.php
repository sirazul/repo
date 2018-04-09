<?php
declare(strict_types=1);
require_once 'vendor/autoload.php';

use PHPUnit\Framework\TestCase;


final class ClassifyTwoIntegersTest extends TestCase
{

    /**
     *
     * test success case
     *
     *
     */
    public function testClassifyCorrect(): void
    {
        // $this->markTestSkipped('must be revisited.');

        $classifier = new ClassifyTwoIntegers();

        $classifier->classify(100, 99);

   
        // run twice for either case
        $status = (strpos($classifier->__toString(), 'Rule 3 Hit')  !== false) ? true : false;
        $status = (strpos($classifier->__toString(), 'Rule 5 Hit')  !== false) ? true : false;

        $this->assertTrue($status);
    }


    /**
     *
     * test failure case
     *
     *
     */
    public function testClassifyFailureCase(): void
    {
        // $this->markTestSkipped('todO.');

        $classifier = new ClassifyTwoIntegers();

        $classifier->classify(1, 97);

        $status = (strpos($classifier->__toString(), 'fizz')  !== false) ? true : false;
        $status = (strpos($classifier->__toString(), 'buzz')  !== false) ? true : false;

        $this->assertFalse($status);
    }

    /**
     *
     * test failure case upper lower boundery
     *
     *
     */
    public function testClassifyBoundryCase(): void
    {
        // $this->markTestSkipped('todO.');

        $classifier = new ClassifyTwoIntegers();

        $classifier->classify(0, 101);

        $status = (strpos($classifier->__toString(), 'fizz')  !== false) ? true : false;
        $status = (strpos($classifier->__toString(), 'buzz')  !== false) ? true : false;

        $this->assertFalse($status);
    }
}
