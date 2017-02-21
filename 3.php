<?php
//3. Поменять местами наибольший и наименьший элементы массива. (массив 10 чисел)
$arr=range(1,10);
$max_arr=max($arr);
//echo $max_arr . "<br>";
$min_arr=min($arr);
//echo $min_arr;
foreach ($arr as $val){
    if ($val==1){
        $val=$max_arr;
    }
    elseif ($val==10){
        $val=$min_arr;
    }

    echo $val . "<br>";
}
