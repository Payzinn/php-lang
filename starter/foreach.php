<?php

$nums = [12, 5, 6, 8, 10, 15];

foreach($nums as $key => $num){
   echo "Ключ ". $key . " Значение " . $num . "<br>";

}

echo '<br>';

$persons = [
    "Петя" => "25",
    "Коля" => "16",
    "Антон" => "34"
];

foreach($persons as $name => $age){
    echo 'Имя ' . $name . ' Возраст ' . $age . '<br>';
}