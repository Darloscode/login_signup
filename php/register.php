<?php

    //Conexión a base de datos
    include 'start.php';    

    //Obtener los valores del formulario
    include 'data.php';

    //Encriptar contraseña
    $encrypt = md5($password);

    //Verificar que el correo no se repita
    $verify = mysqli_query($connection, "SELECT * FROM proyectoa23 WHERE Email='$mail'");
	if(mysqli_num_rows($verify) > 0){
		echo'
            <script>
			    alert("El correo ya ha sido registrado");
			    location.href="../index.html";
		    </script>
		';
		exit;
	}

    //Obtener Fecha(year-month-day)
    date_default_timezone_set('America/Guayaquil');
    $date_time = date("Y-m-d H:i:s");

    //Insertar en base de datos
    $sql = ("INSERT INTO proyectoa23 VALUES('', '$date_time', '$name', '$surname', '$mail', '$encrypt')") or die ("Data sending error"); 
    $execute = mysqli_query($connection, $sql); 

    //Mensaje de registo exitoso
    echo'
        <script>
            alert("Registro Exitoso");
            location.href="../index.html";
        </script>
    ';

    //Cerrar conexión
    mysqli_close($connection);

?>