<?php

$localhost = "localhost";
$user = "root";
$passw = "";
$banco = "website";

//orientado a objetos com pdo

$pdo = new pdo("mysql:dbname=".$banco."; host=" .$localhost, $user, $passw);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql->query("SELECT * FROM usuarios");
$sql->execute();

echo $sql->rowcount();
?>