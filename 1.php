<?php
//1. Cоздать массив из n чисел, каждый элемент которого равен квадрату своего номера.
$arr[] = range(1, 10);
//var_dump($arr);
$element=0;
$key=0;
$result = 0;
foreach (range(1,10) as $key=> $element) {
    $element = $key * $key;
    echo $element . "<br>";

//    $result = pow($element, $key); //возведение с тепень
//    echo $result . "<br>";
}