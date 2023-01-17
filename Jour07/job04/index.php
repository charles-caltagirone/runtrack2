<?php
function calcule($a = 0, $operation = '', $b = 0)
{
    if ($operation === '*') {
        return $a * $b;
    } elseif ($operation === '+') {
        return $a + $b;
    } elseif ($operation === '-') {
        return $a - $b;
    } elseif ($operation === '/') {
        return $a / $b;
    } elseif ($operation === '%') {
        return $a % $b;
    }
}

$a = 20;
$operation = '-';
$b = 10;

echo calcule($a, $operation, $b);
