<?php

//в двойных ковычках можно писать переменную

echo "<pre>";
$name = "Андрей";
$secondname = "Борисов";
echo "1. Привет $name $secondname";
echo "<br>";

echo "2. Пример строки, \n охватывающей несколько строк. \n";

echo 'Также вы можете вставлять в строки
символ новой строки вот так,
это нормально';

// Выводит: Однажды Арнольд сказал: "I'll be back"
echo '<br>Однажды Арнольд сказал: "I\'ll be back"';

// Выводит: Вы удалили C:\*.*?
echo 'Вы удалили C:\\*.*?';
//знак доллара
echo "\nУ меня 50\$";

echo "</pre>";