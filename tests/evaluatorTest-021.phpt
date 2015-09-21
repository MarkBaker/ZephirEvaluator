--TEST--
Test undefined value error when using evaluator
--FILE--
<?php

$formula = '((2 + 3) * x)';

$math = new \Evaluator\Math();

try {
    $answer = $math->evaluate($formula);
} catch (Exception $e) {
    $answer = $e->getMessage();
}

echo $formula, ' => ';
var_dump($answer);


--EXPECT--
((2 + 3) * x) => string(17) "Undefined Value x"
