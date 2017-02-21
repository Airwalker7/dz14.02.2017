<?php
//8. Вывести на экран числа от -15 до 25 с помощью всех известных циклов.

for ($i=-15; $i<=25; $i++){
    echo "$i" . ' ' ;
}
echo  "<br>" . "<hr>" . "<br>";

$i=-16;
while ($i>=-16 and $i<=24){
    $i++;
    echo "$i" . ' ' ;
}
echo  "<br>" . "<hr>" . "<br>";

$x = -15;
do {
    echo "$x" . ' ' ;
} while ($x>-16 and $x++<25);

echo  "<br>" . "<hr>" . "<br>";


foreach ($arr[]=range(-15, 25) as $val){
    echo "$val" . ' ' ;
}
echo  "<br>" . "<hr>" . "<br>";