<?php
    $servername="db";
    $username=getenv('MYSQL_USER');
    // Read the secret value from the file
    $password = trim(file_get_contents(getenv('MYSQL_PASSWORD_FILE')));
    $dbname=getenv('MYSQL_DATABASE');
    $port=getenv('MYSQL_PORT');

    /* Creando una nueva conexión a la base de datos. */
    $conn = new mysqli($servername, $username, $password, $dbname);

    /* Comprobando si hay un error de conexión. */
    if ($conn->connect_error) {
        die('Error de conexion ' . $conn->connect_error);
    }



        # if(!empty($_GET)){
        #    if(isset($_GET['code']) && isset($_GET['btnSubmit_code'])){
        #       var_dump("hicimos bien");
         #       $code_instrument=$_GET['code'];
#
#                if ($conn->connect_error) {
#                    die("Connection failed: " . $conn->connect_error);
#                } 

#                $consulta_rumed_code = "SELECT * FROM coderumed WHERE 'code'='$code_instrument';";
#                if($resultado_code_rumed= $conn->query($consulta_rumed_code)){
#                    var_dump($resultado_code_rumed);
        #           while($file_code_rumed=$resultado_code_rumed->fetch_object()){
        #               echo "code:  " . $file_code_rumed->code_instrument. "<br>";
        #           }
        #       }
        #    }
        #}

   
    
    
    #$resultAll = mysqli_query($conn, $sql_rumed_code);
    #if(!$resultAll){
    #    die(mysqli_error($conn));
    #}
    
    # Check if result greater then 0
    # print($resultAll)
?>