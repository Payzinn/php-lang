<?php

echo"<pre>";
$week = [
    1 => 'Monday',
    2 => 'Tuesday',
    3 => 'Wednesday',
    4 => 'Thursday',
    5 => 'Friday',
    6 => 'Saturday',
    7 => 'Sunday',
];

unset($week[2]);
print_r($week);

if (isset($week[1])){
    echo $week[1];
} else{
    echo 'Такого ключа нет)';
}


echo"</pre>";