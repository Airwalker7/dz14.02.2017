<?php
//2. Найдите сумму и произведение элементов массива (массив 20 чисел)
$arr[]=array_sum(range(1,20)); //сумма элементов в массиве.
var_dump($arr);

$val =1;
foreach (range(1, 20) as $element){
    $val*=$element;
    echo "$val" . "<br>";
}