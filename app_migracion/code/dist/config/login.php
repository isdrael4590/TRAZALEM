<?php
session_start();
//if (isset($_SESSION["user_id"])) {
   //header("Location: index.php");
//}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>INGRESO A TRAZALEM </title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <?php include("template/header.php");  ?>
    </head>
    <body>
        <div class="container">
            <div class="row text-center">
                <div class="col-md-4"> </div>
                
                <div class="col-md-4">
                    <?php
                    if (isset($_POST["login"])) {
                        $user_id = $_POST["user_id"];
                        $password = $_POST["password"];
                        $passwordHash = password_hash($password, PASSWORD_DEFAULT);
                        echo $passwordHash;
                
                        echo '..........';
                        require_once "connection.php";
                        $sql = "SELECT * FROM users WHERE user_id = '$user_id' AND password ='$password'";
                        $result = mysqli_query($conn, $sql);
                        echo $sql;
                        $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
                        if ($user) {
                            
                            if (password_verify($password, $user["password"])) {
                                session_start();
                                $_SESSION["user_id"] = "yes";
                                header("Location: index.php");
                                die();
                            }else{
                                echo "<div class='alert alert-danger'>Contraseña incorrecta</div>";
                            }
                        }else{
                            echo "<div class='alert alert-danger'>Usuario incorrecto</div>";
                        }
                    }
                    ?>
                    <div><p>INGRESAR</p></div>

                    <form action="login.php" method="post">
                        <div class="form-group">
                            <input type="text" placeholder="Ingrese Usuario:" name="user_id" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="password" placeholder="Ingrese contraseña:" name="password" class="form-control">
                        </div>
                        <div class="form-btn">
                            <input type="submit" value="INGRESO" name="login" class="btn btn-primary">
                        </div>
                    </form>
                    <div><p>NO ESTOY REGISTRADO <a href="register.php">Registrar aquí</a></p></div>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>