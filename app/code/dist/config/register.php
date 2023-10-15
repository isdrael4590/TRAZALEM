<?php
session_start();
if (isset($_SESSION["user"])) {
   header("Location: index.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de usuario</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <?php include("template/header.php");  ?>
</head>
<body>
    <div class="container">
        <div class="row text-center">
            <div class="col-md-4"> </div>
                
            <div class="col-md-4">
                <?php
                if (isset($_POST["submit"])) {
                    $full_name = $_POST["full_name"];
                    $user_id = $_POST["user_id"];
                    $password = $_POST["password"];
                    $passwordRepeat = $_POST["repeat_password"];
                    
                    $passwordHash = password_hash($password, PASSWORD_DEFAULT);
                    echo $passwordHash;
                    $errors = array();
                    
                    if (empty($full_name) OR empty($user_id) OR empty($password) OR empty($passwordRepeat)) {
                        array_push($errors,"TODOS LOS CAMPOS SON REQUERIDOS");
                    }
                    //if (!filter_var($usuario, FILTER_VALIDATE_EMAIL)) {
                        //array_push($errors, "Usuario no es valido");
                    //}
                    if (strlen($password)<2) {
                        array_push($errors,"COntraseña debe conterner almenos 5 caracteres");
                    }
                    if ($password!==$passwordRepeat) {
                        array_push($errors,"Contraseñas no son iguales");
                    }
                    require_once "connection.php";
                    $sql = "SELECT * FROM users WHERE user_id = '$user_id'";
                    echo $sql;
                    $result = mysqli_query($conn, $sql);
                    $rowCount = mysqli_num_rows($result);
                    if ($rowCount>0) {
                        array_push($errors,"Usuario ya existe!");
                    }
                    if (count($errors)>0) {
                        foreach ($errors as  $error) {
                            echo "<div class='alert alert-danger'>$error</div>";
                        }
                    }else{
                        
                        $sql = "INSERT INTO users (full_name, user_id, password ) VALUES ( ?, ?, ?)";
                        $stmt = mysqli_stmt_init($conn);
                        $prepareStmt = mysqli_stmt_prepare($stmt,$sql);
                        if ($prepareStmt) {
                            mysqli_stmt_bind_param($stmt,"sss",$full_name, $user_id, $passwordHash);
                            mysqli_stmt_execute($stmt);
                            echo "<div class='alert alert-success'>Usuario registrado exitoso.</div>";
                        }else{
                            die("Something went wrong");
                        }
                    }
                }

                ?>
                <div><p>INGRESE TODOS LOS DATOS</p></div>
                <form action="register.php" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" name="full_name" placeholder="Nombre:">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="user_id" placeholder="usuario:">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" placeholder="Password:">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="repeat_password" placeholder="Repeat Password:">
                    </div>
                    <div class="form-btn">
                        <input type="submit" class="btn btn-primary" value="REGISTRO" name="submit">
                    </div>
                </form>
                <div><p>ESTOY REGISTRADO <a href="login.php">Ingresar aquí</a></p></div>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>