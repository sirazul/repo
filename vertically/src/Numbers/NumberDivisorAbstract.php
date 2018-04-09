<?php 
declare(strict_types=1);

namespace Numbers;

/**
 *  Define client behavior
 *
 *
 */
abstract class NumberDivisorAbstract
{

    /**
     *
     * place holder rule's result message
     *
     */
    private $_ruleResultMessage = '';

    /**
     *  max range value
     */
    private const _MAX = 100;

    /**
     *  min range value
     *
     */
    private const _MIN = 1;



    /**
     *
     * Rule logic to categorise the number
     *
     * @param integer - number to apply rule on
     *
     * @return - bool true if rule applied rule was a success
     *
     */
    abstract public function applyRule(int $number): bool;




    /**
     *
     * Return the message for currently applied rule
     *
     * @param string - get message for the applied rule
     */
    public function getMessage(): string
    {
        return $this->_ruleResultMessage;
    }

    /**
     *
     * Set message of the currently applied rule
     *
     * @param string - apply message for result rule
     */
    public function setMessage(string $message): void
    {
        $this->_ruleResultMessage = $message;
    }

    
    /**
     *
     * validate number is between range 1 - 100
     *
     * @param number - to validate
     *
     * @return bool - true - number is within range
     */
    public function isInRange(int $numberToValidate): bool
    {
        if (($numberToValidate <= self::_MAX) && ($numberToValidate >= self::_MIN)) {
            return true;
        }

        return false;
    }
}
