<?php

$result = 2 + 2;

switch($result){
    case 3:
        echo "Маловато";
        break;

    case 4:
        echo "В точку";
        break;  
    
    case 5:
        echo "Перебор";
        break;

    default:
        echo "Нет такого значения";

}

echo "<br>";


$result = 1 + 2;

switch($result){
    case 4:
        echo "Правильно";
    
    case 3 - 3:
    case 5 - 2:
        echo "Неправильно" . "<br>";
        echo "Может следует все перепроверять?" . "<br>";
        break;
    
    default:
        echo"Результат выглядит странновато";
}