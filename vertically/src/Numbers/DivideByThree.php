<?php
declare(strict_types=1);

namespace Numbers;

use Numbers\NumberRuleInterface;

class DivideByThree implements NumberRuleInterface
{
   
    /**
     *
     *
     *  configure the rule
     *
     */
    private const _MYRULE = 3;


    /**
     *
     *  configure the message for this rule
     *
     *
     */
    private const _MYMESSAGE = 'Rule 3 Hit';

    /**
     *
     *
     * @return int - the rule by which number will categorized
     */
    public function getRule() : int
    {
        return self::_MYRULE;
    }

    /**
     *
     * Success message
     *
     * @return string - message to show rules was sucesss
     */

    public function getRulesMessage() : string
    {
        return self::_MYMESSAGE;
    }
}
