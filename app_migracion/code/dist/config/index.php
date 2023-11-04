<?php 

session_start();
//if (!isset($_SESSION["username"])) {
   //header("Location: login.php");
//}



include("template/header.php");

?>
      
        <!-- lavado-->
        <?php include("modules/zonas/lavado_index.php");?>
        <!-- ZONA NO ESTERIL Grid-->
        <?php include("modules/zonas/zne_index.php");?>
        <!-- ZONA DESPACHO-->
        <?php include("modules/zonas/ze_index.php");?>
        <!-- Bootstrap core JS-->
        <!-- Footer-->
        <?php include("template/footer.php") ?>

