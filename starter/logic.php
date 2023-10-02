<?php 

//логика

$positive = 5 > 1;
$negative = 3 === 2;

// логическое и
echo "true and false ";
var_dump($positive and $negative);
echo '<br>';

// логическое или
echo "true или false ";
var_dump($positive or $negative);
echo '<br>';

// исключающее или
echo "true или false ";
var_dump($positive xor $negative);
echo '<br>';

echo "true или false ";
var_dump($positive xor true);
echo '<br>';

//отрицание
echo "!true ";
var_dump( !$positive );
echo '<br>';

//логическое и больший приоритет чем and
echo "true && false ";
var_dump( $positive && $negative );
echo '<br>';

echo "true && false and true ";
var_dump( $positive && $negative );
echo '<br>';

//логическое или больший приоритет чем or
echo "true || false ";
var_dump( $positive || $negative );
echo '<br>';

echo "true || false or true ";
var_dump( $positive || $negative or true );
echo '<br>';