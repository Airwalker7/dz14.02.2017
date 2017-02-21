<?php
//7. Создайте массив ста случайных чисел от 1 до 10 и найдите в этом массиве число, которое повторяется наибольшее количество раз.
for ($i=1; $i<=100; $i++){
    $arr[$i]=rand(1, 10);
}
var_dump($arr);
$ar1 = array_count_values($arr);
var_dump($ar1);
$max_ar1 = max($ar1);

foreach ($ar1 as $key=>$val){
    if ($val==$max_ar1){
        echo "Число - " . "$key" . " повторяется больше всего раз -" . "$max_ar1";
    }
}