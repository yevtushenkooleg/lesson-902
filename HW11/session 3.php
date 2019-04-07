<?php



session_start();
if (!isset($_SESSION['counter'])){
    $_SESSION['counter']=0;
    echo "Вы ещё не обновляли страницу";}

else {
    $count=0;
    $count++;
    $_SESSION['count'] = $count;
    echo 'Вы были здесь ' .$count . ' раз';}