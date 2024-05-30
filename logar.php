<?php

if(isset($_POST['email'])&& !empty($_POST['email'])isset($_POST['senha'])&& !empty($_POST['senha'])) {
  
    require 'conexao2.php';
    require 'Usuario.class.php';

    $u = new Usuario();
    $u->login($email, $senha);

    $login = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);

    if($u->login($email, $senha) == true){
        if(isste($_SESSION['idUser'])){
            header("Location: index.php");
        }else{
            header("Location: login.php");
        }
        
    }elser{
        header("Location: login.php");
    }

}else{
    header("Location: login.php")
}

?>