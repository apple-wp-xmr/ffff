<?php
$dsn = 'mysql:host=localhost;dname=world';
$username = 'root';
// $password = 'pa55word';

try {
    $db = new PDO($dsn, $username);
} catch (Exception $e) {
    echo 'DataBase error: ',  $e->getMessage(), "\n";
    exit();
}
