<?php

if(isset($_POST['email'])&& !empty($_POST['email'])) {
  
    $login = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);

}

?>