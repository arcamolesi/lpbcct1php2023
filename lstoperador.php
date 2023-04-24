<?php
    include 'conexao.php'; 
    $sql = "select * from operador;"; 
    $con = Conexao::conectar(); 
    $lstOperador = $con->query($sql); 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Operadores de Máquinas</title>

    
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
      
</head>
<body>
    <h1>Listar Operadores</h1>

    <table class="striped blue">
        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>ANIVERSÁRIO</th>
            <th>SALÁRIO</th>
        </tr>
        
        <?php
            foreach($lstOperador as $operador){

        ?>
         
         <tr>
            <td><?php echo $operador['id']; ?></td>
            <td><?php echo $operador['nome']; ?></td>
            <td><?php echo $operador['aniversario']; ?></td>
            <td><?php echo $operador['salario']; ?></td>
         </tr>

        <?php
            }
        ?> 

    </table>
</body>
</html>