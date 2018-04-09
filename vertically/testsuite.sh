
echo "***  Rull All Tests     ****"

echo ""
echo ""

echo "--- ClassifyTwoIntegersTest --- "
phpunit  --bootstrap vendor/autoload.php tests/ClassifyTwoIntegersTest.php

echo ""
echo "--- DivideByThreeAndFiveRuleTest --- "
phpunit  --bootstrap vendor/autoload.php tests/DivideByThreeAndFiveRuleTest.php

echo ""
echo "--- DivideByRuleTest --- "
phpunit  --bootstrap vendor/autoload.php tests/DivideByRuleTest.php


