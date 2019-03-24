<?php

$a = [1,2,3,4,5];
foreach ($a as $result) {
    echo $result*$result. '<br>'; // #1
}

$arr = ['коля'=>200, 'вася'=>300, 'петя'=>400];
foreach ($arr as $key=>$salary) {
    echo ($key.' - зарплата '.$salary.' долларов.'.'<br>'); // #2
}

$a = ['mo', 'tu', 'we', 'th', 'fr', 'sa', 'su'];


$arr = ['green'=>'зеленый', 'red'=>'красный', 'blue'=>'голубой'];
foreach ($arr as $en=>$ru) {
    echo ($en.'<br>');
    echo ($ru.'<br>');
}

