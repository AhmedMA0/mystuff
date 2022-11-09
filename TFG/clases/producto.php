<?php
    error_reporting(E_ALL);
    ini_set('display_errors', '1');

/**
 * @author web.ahmed.m@gmail.com
 */
class Producto{

        /**
         * Devuelve toda la información sobre las categorias
         * @return array|void
         * @access public
         * @static
         * @param $cat
         */
        static function verProdsxCat($cat){

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
                $prodQuery = $conexion->stmt_init();

                $prodQuery->prepare("select nombre, descr, precio from producto where idCat = ".$cat.";");

                $prodQuery->execute();

                $prodQuery->bind_result($name, $desc, $price);

                $prods = null;
                $i = 0;
                while ($prodQuery->fetch()) {
                    $prods[$i]['name'] = $name;
                    $prods[$i]['desc'] = $desc;
                    $prods[$i]['price'] = $price;
                    $i++;
                }

                return $prods;

            }catch(Exception $ex){

                //Si no, lanzamos otra
                echo $ex->getMessage(), "<br>";

            }

            //Cerramos la conexion a db
            $conexion->close();
        }

        /**
         * Devuelve toda la información sobre las categorias
         * @return array|void
         * @access public
         * @static
         * @param $cat
         */
        static function verProdsxNombre($id){

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
               
			$firstq = $conexion->stmt_init();

			$firstq->prepare("select descr, precio from producto where nombre = '".$id."';");

			$firstq->execute();

			$firstq->bind_result($desc, $precio);

			$firstq->fetch();

            $prod = null;
            $prod['desc'] = $desc;
            $prod['precio'] = $precio;

            return $prod;

            }catch(Exception $ex){

                //Si no, lanzamos otra
                echo $ex->getMessage(), "<br>";

            }

            //Cerramos la conexion a db
            $conexion->close();
        }

        /**
         * Inserta una nueva categoria en base de datos
         * @return void
         * @access public
         * @static
         * @param $name
         */
        static function crearProd($name, $desc, $pvp, $cat) : void{

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
                $insert->prepare("INSERT INTO producto VALUES ('".$name."','".$desc."','".$pvp."','".$cat."');");
                $insert->execute();

                $insert->close();

            }catch(Exception $ex){

                //Si no, lanzamos otra
                echo $ex->getMessage(), "<br>";

            }

            //Cerramos la conexion a db
            $conexion->close();
        }

        /**
         * Borra una categoría de la base de datos por su id
         * @return void
         * @access public
         * @static
         * @param $id
         */
        static function borProd($id) : void{

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
                $update = $conexion->stmt_init();
                $update->prepare("delete from producto where nombre = '".$id."';");
                $update->execute();

            }catch(Exception $ex){

                //Si no, lanzamos otra
                echo $ex->getMessage(), "<br>";

            }

            //Cerramos la conexion a db
            $conexion->close();
        }

        /**
         * Borra una categoría de la base de datos por su id
         * @return void
         * @access public
         * @static
         * @param $id
         * @param $nombre
         */
        static function actProd($desc, $pvp, $nombre) : void{

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
                $update = $conexion->stmt_init();
                $update->prepare("update producto set descr ='".$desc."', precio =".$pvp." where nombre ='".$nombre."';");
                $update->execute();
                $update->close();

            }catch(Exception $ex){

                //Si no, lanzamos otra
                echo $ex->getMessage(), "<br>";

            }

            //Cerramos la conexion a db
            $conexion->close();
        }
    }

            
    
?>