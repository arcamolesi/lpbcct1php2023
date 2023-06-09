<?php
  session_start(); 
   if (!isset($_SESSION['login']))
       Header("Location: ../index.php");   
?> 


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <script src="/view/js/init.js"></script>
    <title>Menu Principal de Operadores</title>
</head>

<body>
    <!-- menu principal superior -->

    <nav>
        <div class="nav-wrapper blue dark-3">
            <a href="#" class="brand-logo right">
                <img src="/lpbcct1php2023/VIEW/imagens/logocarro.jpg" alt="" width="80" height="100">
            </a>
            <ul id="nav-mobile" class="left hide-on-med-and-down" >
                <li><a href="/lpbcct1php2023/VIEW/operador/lstoperador2.php">Operador</a></li>
                <li><a href="badges.html">Components</a></li>
                <li><a href="/lpbcct1php2023/VIEW/area/lstarea.php">Area</a></li>
                <li><a href="/lpbcct1php2023/view/logout.php">Logout</a></li>
            </ul>
        </div>
       
    </nav>


    <p>Usuario: <?php echo $_SESSION['login']?></p>

  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="/view/js/materialize.js"></script>
  <script src="../init.js"></script>

</body>

</html>