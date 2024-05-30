<?php

session_start();

$localhost = "localhost";
$user = "root";
$passw = "";
$banco = "website";

global $pdo;

try {
    // Object-oriented PDO
    $pdo = new PDO("mysql:dbname=" . $banco . ";host=" . $localhost, $user, $passw);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
    exit;
}

?>