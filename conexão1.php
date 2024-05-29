<?php

$localhost = "localhost";
$user = "root";
$passw = "";
$banco = "website";

$conecta = mysqli_connect($localhost, $user, $passw, $banco);

$sql = mysqli_query($conecta, "SELECT * FROM  usuarios");

echo "Existem " .mysqli_num_rows($sql). " usuários cadastrados";


?>