<?php
require_once("conexion.php");

if ($con != NULL) {
    if (isset($_POST['usuario1']) and ($_POST['pass1']) and ($_POST['nom']) and ($_POST['ape']) ) {
        $mail = $_POST['usuario1'];
        $pass = $_POST['pass1'];
        $nombre = $_POST['nom'];
        $apellido = $_POST['ape'];


        $consulta = "INSERT INTO usuarios( nombre,mail,pass) VALUES ('$nombre','$mail',MD5('$pass'))";


        
        mysqli_query($con, $consulta);

        header("Location: ../paginas/register.php?alta=ok" );

    }
}

?>