<?php

echo "<pre>";

/**
 * Операции над массивами
 * 
 *  - isset
 *  - unset
 *  - count
 *  - array_push
 *  - in_array
 *  - implode
 *  - array_keys
 *  - array_values
 */

$week = [
    1 => 'Monday',
    2 => 'Tuesday',
    3 => 'Wednesday',
    4 => 'Thursday',
    5 => 'Friday',
    6 => 'Saturday',
    7 => 'Sunday'
];

// if ( isset($week[1]) ) {
//     echo $week[1];
// } else {
//     echo "Такой ключ не существует";
// }

print_r(count($week));



// unset($week[2]);
// unset($week[3]);
// unset($week[7]);


array_push($week, 'new day', 'new day');
print_r($week);


var_dump( in_array('Monday OOO', $week) );


print_r( implode(', ', $week) );


print_r( array_keys($week) );
print_r(array_values($week));

echo "</pre>";
