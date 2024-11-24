<?php
    session_start();

    include '../php/start.php';

    error_reporting(0);

    $start = $_SESSION['email'];

    if($start == null || $start == ''){
        header("Location: ../index.html");        
        die ();
    }

    $sql = "SELECT * FROM proyectoa23 WHERE Email='$start'";
    $execute = mysqli_query($connection, $sql);
    $row = mysqli_fetch_assoc($execute);    
    $name = $row['Nombre'];
    $fulname = $row['Apellidos'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <link rel="stylesheet" type="text/css" href="../Styles/styless_inicio.css"">

    <script src="https://kit.fontawesome.com/3bd592f027.js" crossorigin="anonymous"></script>

    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="JS/validate.js"></script>

    <title>Darlos-Bienvenido</title>
    
</head>
<body>
    <div class="nav">
        <ul class="menu-horizontal">
            <li><a href="#">Inicio</a></li>
            <li><a href="#">Servicios</a></li>
            <li><a href="#">Contactos</a></li>
            <li><a href="#">Perfil</a>
                <ul class="menu-vertical">
                    <li><a href="#"><?php echo $name ?></a></li>
                    <li><a href="#">Configuración</a></li>
                    <li><a href="../php/close.php">Salir</a></li>
                </ul>
            </li>
        </ul>
    </div>    

    <div id="welcome">
        <h1 id="name-main"><center>Bienvenido/a <?php echo $name,' ', $fulname ?> </strong></h1></center>
    </div>
    

    <div id="number" class="text-danger" name='number'></div>
    <script type="text/javascript">
        n=0
        var num = document.getElementById("number");
        var id = window.setInterval(function(){
            document.onmouseover = function(){
                n=0
            };
            num.innerText = n;
            n++;            
            if(n >= 260){
                location.href='../php/close.php'
            }
        },1200);
    </script>    

</body>
</html>