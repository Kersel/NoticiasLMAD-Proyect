<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MySQL
 *
 * @author RayEspinosa
 */
class MySQL {
    //put your code here
    private $host="kersel";
    private $user="root";
    private $password="lmad";
    
    static public function abrirConexion()
    {
        $enlace =  mysql_connect("localhost", "root", "lmad");
        $db = "lmadnews";
        mysql_select_db($db,$enlace);
        if (!$enlace) {
            die('No pudo conectarse: ' . mysql_error());
        }
        echo 'Conectado satisfactoriamente';
        return $enlace;
        
    }
    static public function cerrarConexion($conexion)
    {
        mysql_close($conexion);
    }
    /*
    public function conexiones($usuario, $clave) {
	
	//sentencia sql para consultar el nombre del usuario
	$sql = "SELECT * FROM `lmadnews`.`usuarios` WHERE `email`='$usuario' AND `contrasena`='$clave'";
	//ejecucion de la sentencia anterior
	$ejecutar_sql=mysql_query($sql);
	//si existe inicia una sesion y guarda el nombre del usuario
	if (mysql_num_rows($ejecutar_sql)!=0){
		//inicio de sesion
		session_start();
		//configurar un elemento usuario dentro del arreglo global $_SESSION
		$_SESSION['email']=$usuario;
		//retornar verdadero
		return true;
	} else {
		//retornar falso
		return false;
	}
     }
     
     //funcion para verificar que dentro del arreglo global $_SESSION existe el nombre del usuario
    public function verificar_usuario(){
        session_start();
	//comprobar la existencia del usuario
	if ($_SESSION[email]){
		return true;
	}
    }
	
*/
   
}

?>
