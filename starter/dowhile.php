<?php

$week = [
    'Понедельник',"Вторник","Среда","Четверг","Пятница", "Суббота", "Воскресенье"
];

$day = 0;

do{
    echo $week[$day] . '<br>';
    $day++;
    if ($day > 4){
        break;
    }

} while($day < count($week));