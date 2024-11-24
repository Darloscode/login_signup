<?php

    //Linea para iniciar una sesión
    session_start();

    //Conexión a base de datos
    include 'start.php';

    //Obtener los valores del formulario
    $email = $_POST['email'];
    $password = $_POST['pass']; 

    //Encriptar contraseña
    $encrypt = md5($password);

    //Consultar y seleccionar el correo ingresado
    $consult = mysqli_query($connection, "SELECT * FROM proyectoa23 WHERE Email='$email'");

    //Verificar si el correo existe e iniciar sesión
    $quantity = mysqli_num_rows($consult);
    if($quantity == 0){
        echo'
            <script>
                alert("Este correo no ha sido registrado");
                location.href="../index.html";
            </script>
        ';
    }else{        
        $_SESSION['email'] = $email;

        $sql = ("SELECT * FROM proyectoa23 WHERE Email='$email' and Contrasena='$encrypt'");

        $execute = mysqli_query($connection, $sql);
    
        $number = mysqli_num_rows($execute);

        if($number == 1){
            header("location: ../main/inicio.php");

        }else{
            if($number == 0){                
                echo'
                <script>
                    alert("Compruebe la contraseña o correo");
                    location.href="../index.html";
                </script>
                ';
                session_destroy();
            }            
        }
    }
    mysqli_close($connection);
?>