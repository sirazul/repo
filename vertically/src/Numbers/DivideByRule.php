<?php
namespace Numbers;

use Numbers\NumberRuleInterface;
use Numbers\NumberDivisorAbstract;

class DivideByRule extends NumberDivisorAbstract
{
    /**
     *
     *  recieves number divisable rule to apply
     *
     */

    private $_divide_by_rule;
    
    
    /**
     *
     *  recieves success message should be for the rule
     *
     */
    private $_rules_hit_message;


    public function __construct(NumberRuleInterface $rule)
    {
        $this->_divide_by_rule = $rule->getRule();
        $this->_rules_hit_message = $rule->getRulesMessage();
        $this->setMessage('');
    }


    /**
     *
     * The rule to classify if number can be divisable by DIVIDE_RULE
     *
     * @param int number to classify
     *
     * @return bool - true if rule is satisfied
     */
    public function applyRule(int $number): bool
    {

         // check if number is in range
        if (!$this->isInRange($number)) {
            return false;
        }

        // reset message divisor status
        $this->setMessage('');

        // apply the
        $modulus = $number % $this->_divide_by_rule;

        // if mod is 0 then number is divisable by rule
        if ($modulus == 0) {
            $this->setMessage($this->_rules_hit_message);
            return true;
        }
        
        // not classified by this divide_by_rule
        return false;
    }
}
