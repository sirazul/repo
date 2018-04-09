<?php
declare(strict_types=1);

namespace Numbers;

use Numbers\NumberRuleInterface;

class DivideByFive implements NumberRuleInterface
{
   
    /**
     *
     *  configure the rule
     *
     */
    private const _MYRULE = 5;

    /**
     *
     *  configure the success message
     *
     */
    private const _MYMESSAGE = 'Rule 5 Hit';



    /**
     * getRulesMessage():str
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
