<?php 
declare(strict_types=1);

namespace Numbers;

interface NumberRuleInterface
{
    public function getRule() : int;
    
    public function getRulesMessage() : string ;
}
