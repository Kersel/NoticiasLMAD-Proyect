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
    private $host="localhost";
    private $user="root";
    private $password="root";
    
    static public function abrirConexion()
    {
        $enlace =  mysql_connect("localhost", "root", "root");
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
}

?>
