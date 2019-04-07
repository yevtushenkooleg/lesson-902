<?php

session_start();


$country = $_POST["country"];
$_SESSION["country"]= $country;
echo $country;

