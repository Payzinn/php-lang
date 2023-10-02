<?php

$available = true; //bool значение
//$age = 18;
$PI = 3.14;
$hello = "приветик";
$hello = 10;
$empty = null;
// ...
//var_dump($hello); // переменную надо объявлять перед ним

$name = "Alex";
$isNameSet = isset($age); // проверка существует ли переменная
//var_dump($isNameSet); //возвращает True или False
var_dump($name);
unset($name); //уничтожает переменную
//var_dump($name); переменная уничтожена и выведется ошибка если вывести её после unset
