<?php
define ('SUM', '+');
define ('DIFF', '-');
define ('MULTIPLY', '*');
define ('DIVISION', '/');
define ('EXP', '**');

$operator = EXP;

$a = 10;
$b = 5;

$result = null;

switch($operator){
    case SUM:
        $result = $a + $b;
        break;

    case DIFF:
        $result = $a - $b;
        break;

    case MULTIPLY:
        $result = $a * $b;
        break;

    case DIVISION:
        $result = $a / $b;
        break;
    
    case EXP:
        $result = $a ** $b;
        break;


    default:
        echo "Никаких вычислений  не произведено";
}

if (isset($result)){
    echo $a . $operator . $b . '=' . $result;
}