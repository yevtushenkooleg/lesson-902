<?php


if (isset($_COOKIE['count'])) {
    $count = $_COOKIE['count'];
} else{
    $count=0;
}

$count++;

setcookie('count', $count, strtotime('+1 year'));

echo 'We`ve seen you ' .$count . ' times';