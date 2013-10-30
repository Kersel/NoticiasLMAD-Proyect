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

    static public function abrirConexion()
    {
        $enlace =  mysqli_connect("localhost", "root", "root");
        $database = "lmadnews";
        mysqli_select_db($enlace,$database);
        if (!$enlace) {
                die('No pudo conectarse: ' . mysqli_error());
        }
        return $enlace;
    }
    static public function cerrarConexion($conexion)
    {
        mysqli_close($conexion);
    }
    
    static public function getSP($storedProcedure,$parametros){
            $conexion = MySQL::abrirConexion();
            $datosIni = strstr($storedProcedure,"1");
            $datosFin = strstr($datosIni,")",true);
            $numeros = explode(",",$datosFin);
            $query = str_replace($numeros, $parametros, $storedProcedure);
            $result = mysqli_query($conexion,$query);
            $arrayAsoc = (mysqli_fetch_assoc($result));
            MySQL::cerrarConexion($conexion);
            return $arrayAsoc;
    }
    
    static public function callSP($storedProcedure,$parametros){
            $conexion = MySQL::abrirConexion();
            $query = $storedProcedure;
            if(isset($parametros)){
                $datosIni = strstr($storedProcedure,"(");
                $datosFin = strstr($datosIni,")",true);
                $numeros = explode(",",$datosFin);
                $query = str_replace($numeros, $parametros, $storedProcedure);
            }
            mysqli_query($conexion,$query);
            MySQL::cerrarConexion($conexion);
    }
    
    
}

?>
