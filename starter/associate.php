<?php


echo "<pre>";

$arr = [
    1 => "a",
    "5" => "b",
    2.5 => "c",
    true => "d",
    null => "e"
];

print_r($arr);

$boys = [
    "Peter" => 35,
    "Ben" => 37,
    "Jes" => 43
];

$boys["Tom"] = 55;

print_r($boys);

echo "</pre>";