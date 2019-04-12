<?php

$db = new PDO('mysql:host=localhost;dbname=test', 'oleg', 'oleg', [
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
]);

$sql = 'SELECT id, first_name, last_name, email 
        FROM users 
        WHERE email = :email 
        ORDER BY last_name ';
$query = $db->prepare($sql);
$query->bindParam('email', $_GET ['$email']);
$query->execute();
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <title>SQL</title>
    <link rel="stylesheet" href="main.css"
</head>

<body>
    <table>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Lastname</th>
            <th>Email</th>
        </tr>
        <?php foreach ($query as $row): ?>
            <tr>
                <td><?= $row['id'] ?></td>
                <td><?= $row['first_name'] ?></td>
                <td><?= $row['last_name'] ?></td>
                <td><?= $row['email'] ?></td>
            </tr>
        <?php endforeach ?>
    </table>
</body>

</html>
