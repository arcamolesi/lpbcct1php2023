<?php
    include_once 'C:\xampp\htdocs\lpadst1php2023\BLL\bllUsuario.php';

    $usuario = trim($_POST['usuario']); 
    $senha = trim($_POST['senha']); 

    echo "Usuario: " . $usuario . "</br>"; 
    echo "Senha: " . $senha. "</br>" . "</br>";

    $bll = new  \BLL\bllUsuario();
    $objUsuario = $bll->SelectUser($usuario);

    echo "Usuario BD: " . $objUsuario->getUsuario() . "</br>"; 
    echo "Senha BD" . $objUsuario->getSenha();

?>