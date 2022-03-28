<?php
    require_once '../model/Empleado.php';

    class Conexion {
        private static $conexion;

        public static function openConexion(){
            if(!isset(self::$conexion)){
                try{
                    require_once('config.inc.php');

                    self::$conexion = new mysqli(NOMBRE_SERVIDOR, NOMBRE_USUARIO, PASSWORD, NOMBRE_BD);
                    return self::$conexion;
                }catch(Exception $ex){
                    print "ERROR: " . $ex -> getMessage() . "<br/>";
                    die();
                }
            }
        }

        public static function closeConexion(){
            if(isset(self::$conexion)){
                // Cerrar conexión aqui
                mysqli_close(self::$conexion);
            }
        }

        public static function extractConexion(){
            return self::$conexion;
        }

    }