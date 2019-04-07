<?php

$errors = [];

if(empty($_POST['email'])) {
    $error['email'] = 'Введите email';
} else {
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);

    if ($email === false) {
        $errors['email'] = 'Неверный email';
    }
}

if(empty($_POST['password'])) {
    $error['password'] = 'Введите пароль';
}

if(empty($_POST['passwordConfirmation'])) {
    $error['passwordConfirmation'] = 'Введите подтверждение пароля';
}elseif ($_POST['password'] != $_POST['passwordConfirmation']) {
    $errors['passwordConfirmation'] = 'Пароль и подтверждение не совпадают';
}

if ($errors) {
    include 'form.php.php';
    exit();
}

$file = fopen('users.txt' , 'a');
$line = $_POST['email'] . "\t" . $_POST['password'] . "\n";
fputs($file, $line);
fclose($file);

header('Location: form.html');