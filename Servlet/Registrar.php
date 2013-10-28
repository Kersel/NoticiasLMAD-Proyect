<?php
    //include (".../Modelo/Usuario_Modelo.php");
    include ("../Conexion/MySQL.php");
    $conn = MySQL::abrirConexion();
    
    $nombre = $_POST["name"];
    $apPat = $_POST["apellido"];
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    $fecha = date("Y-m-j");        
    /*
    $usuario = $_POST["email"];
    $clave = $_POST["pass"];
    
    if (MySQL::conexiones($usuario, $clave)){
	//si es valido accedemos a ingreso.php
	header('Location: ../PerfilAdmin.php');
    } else {
	//si no es valido volvemos al formulario inicial
	header('Location: index.php');
    }
    echo $usuario , $clave;
    */
    $sql = "CALL altaUsuario('$nombre','$apPat','$email','$pass','$fecha')";
    
    $id = mysql_query($sql,$conn);
    
    
     header ("Location: ../PerfilAdmin.php"); 
    MySQL::cerrarConexion($conn);

?>





?>
