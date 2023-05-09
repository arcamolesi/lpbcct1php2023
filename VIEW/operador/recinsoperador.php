<?php

    include_once '../../MODEL/Operador.php'; 
    include_once '../../BLL/blloperador.php';

    //capturar dados oriundos do formulário insOperador.php
    $operador = new \MODEL\Operador; 

    $operador->setNome($_POST['txtNome']);
    $operador->setAniversario($_POST['txtAniversario']); 
    $operador->setSalario($_POST['txtSalario']); 

  
    $bll = new \BLL\bllOperador();

    $bll->Insert($operador); 

   // echo "nome: ".  $operador->getNome() . "</br>";
  //  echo "aniversario: ". $operador->getAniversario(). "</br>";
   // echo "salario: " . $operador->getSalario() . "</br>";


?>