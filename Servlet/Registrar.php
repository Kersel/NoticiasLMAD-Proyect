<?php
    include ("../Modelo/Usuario_Modelo.php");
    include ("../Conexion/MySQL.php");
    $conn = MySQL::abrirConexion();
    $nombre = $_POST["name"];
    $apPat  = $_POST["apellido"];
    $email  = $_POST["email"];
    $pass   = $_POST["pass"];
    $fecha  = date("j/M/y");
    $sql="call altaUsuario('$nombre','$apPat','$email','$pass','$fecha')";
    $procedure = mysql_query($sql);
    MySQL::cerrarConexion($conn);
    header('Location: localhost/NoticiasLMAD-Proyect/index.php');
?>

