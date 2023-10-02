<?php

echo "<pre>";

$todo = [
    "monday" => [
        "first" => 'Убраться',
        'Сходить в зал'
    ],

    "tuesday" => [
        'Съездить в шарагу',
        'Сходить в зал',
        "Сериал"
    ]
];

$monday = $todo['monday'];
$tuesday = $todo['tuesday'];

print_r($monday);
print_r($tuesday);
print_r($todo['monday']["first"]);

echo "</pre>";