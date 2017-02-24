<?php
//3. Поменять местами наибольший и наименьший элементы массива. (массив 10 чисел)
for ($i=1; $i<=10; $i++){
    $arr[$i]=rand(1, 100);

}
var_dump($arr);
$max_arr = max($arr);
echo "$max_arr" . "<br>";
$min_arr = min($arr);
echo "$min_arr" . "<br>" . "<br>" . "<br>";
foreach ($arr as $val){
    if ($val==$min_arr){
        $val=$max_arr;
    }
    elseif ($val==$max_arr){
        $val=$min_arr;
    }

    echo $val . "<br>";
}
