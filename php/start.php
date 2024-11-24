<?php
    #$connection = mysqli_connect("Nombre del servidor", "Nombre del usuario", "Contraseña") or die ("Error de conexión");
    $connection = mysqli_connect("localhost", "darlos", "darlos") or die ("Error de conexión");
    #$table = mysqli_select_db(conexión, "Base de datos") or die ("Error, tabla no encontrada");
    $table = mysqli_select_db($connection, "proyectoa") or die ("Error, tabla no encontrada"); 
?>