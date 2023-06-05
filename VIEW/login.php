<?php
    include_once 'C:\xampp\htdocs\lpbcct1php2023\BLL\bllUsuario.php';

    $usuario = trim($_POST['usuario']); 
    $senha = trim($_POST['senha']); 

    echo "Usuario: " . $usuario . "</br>"; 
    echo "Senha: " . md5($senha) . "</br>" . "</br>";

    $bll = new  \BLL\bllUsuario();
    $objUsuario = $bll->SelectUser($usuario);

    echo "Usuario BD: " . $objUsuario->getUsuario() . "</br>"; 
    echo "Senha BD: " . $objUsuario->getSenha(); 

    if($objUsuario != null) {
        if (md5($senha) == $objUsuario->getSenha()){
             session_start();
             $_SESSION['login'] =  $objUsuario->getUsuario() ;
             header("location:menu.php");
         }
         else header("location:index.php");
     }
     else header("location:index.php");
    

?>