<?php

$dsn = 'mysql:host=localhost;dbname=FALL';
$username = 'reymar77_webdev2';
$password = 'pass';
$options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

try {

    $db = new PDO($dsn, $username, $password, $options);
} catch (PDOException $e) {

    $error_message = $e->getMessage();
    include 'errors/db_error_connect.php';
    exit;
}