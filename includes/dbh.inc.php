<?php

$host = 'localhost';
$dbname = 'phpsystem';
$dbusername = 'root';
$dbpassword = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $dbusername, $dbpassword);
    // setting attributes, if not working it throws a PDOException

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // if PDOException then display the error message
    die("Connection failed: " . $e->getMessage());
}