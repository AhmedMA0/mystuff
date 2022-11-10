<?php
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
    session_start();

/**
 * @author web.ahmed.m@gmail.com
 */
class Categoria extends Crud{

        /**
         * Devuelve toda la información sobre las categorias
         * @return array|void
         * @access public
         * @static
         */
        static function leer(){

            //Intentamos iniciar la conexión en la base de datos
            try{
                $conexion = new mysqli('localhost', 'ahmed', '123456', 'mosushi');

                if($conexion->connect_errno){

                    //Error al soltar un error la función
                    throw new Exception("No se ha podido acceder a la base de datos");

                }
            }catch(Exception $ex){
                //Otro tipo de error
                echo $ex->getMessage(), "<br>";

            }

            try{
                $query = $conexion->stmt_init();

                $query->prepare("select * from categoria");

                $query->execute();

                $query->bind_result($id,$nombre);

                $cats = null;
                while ($query->fetch()) {
                    $cats[$id] = $nombre;
                }

                return $cats;

            }catch(Exception $ex){

                //Si no, lanzamos otra
                echo $ex->getMessage(), "<br>";

            }

            //Cerramos la conexion a db
            $conexion->close();
        }

        /**
         * Inserta una nueva categoria en base de datos
         * @return array|void
         * @access public
         * @static
         */
        static function crear($name) : void{

            //Intentamos iniciar la conexión en la base de datos
            try{
                $conexion = new mysqli('localhost', 'ahmed', '123456', 'mosushi');

                if($conexion->connect_errno){

                    //Error al soltar un error la función
                    throw new Exception("No se ha podido acceder a la base de datos");

                }
            }catch(Exception $ex){
                //Otro tipo de error
                echo $ex->getMessage(), "<br>";

            }

            try{
                $insert = $conexion->stmt_init();
                $insert->prepare("INSERT INTO categoria (nombre) VALUES ('".$name."');");
                $insert->execute();

                $insert->close();
                $conexion->close();

            }catch(Exception $ex){

                //Si no, lanzamos otra
                echo $ex->getMessage(), "<br>";

            }

            //Cerramos la conexion a db
            $conexion->close();
        }
    }
?>