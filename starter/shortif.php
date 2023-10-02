<?php

$hour = 12;

$state = $hour < 19 ? "Открыто": "Закрыто";

echo $state;

//if - elseif - else
echo "<br>";

if ($hour < 12){
    echo "Еще утро";
} elseif($hour === 12){
    echo "Сейчас полдень";
} else{
    echo "Уже вечер";
}