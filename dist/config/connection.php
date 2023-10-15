<?php

    $servername="localhost";
    $username="root";
    $password="";
    $db_rumed="rumed_code";
    
    /* Creando una nueva conexión a la base de datos. */
    $conn = new mysqli($servername, $username, $password, $db_rumed);

    /* Comprobando si hay un error de conexión. */
    if ($conn->connect_error) {
        die('Error de conexion ' . $conn->connect_error);
    }




    // LA PARTE DE AQUI ABAJO SI FUNCIONA CORRECTAMENTE

   // try {
     //   $conn = new PDO("mysql:host=$servername;dbname=$db_rumed", $username, $password);
       // $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo("conexion exitosa");
    //} catch (PDOException $e){
       // echo $e ->getMessage();
    //}


?>