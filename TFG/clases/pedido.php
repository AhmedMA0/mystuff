<?php

    /**
     * @author web.ahmed.m@gmail.com
     */
    class Pedido{
        /**
         * @var
         */
        protected $datafono;

        /**
         * @var
         */
        protected $cambio;

        /**
         * @var
         */
        protected $estado;

        /**
         * @var
         */
        protected $idUser;

        /**
         * @param $datafono
         * @param $cambio
         * @param $estado
         * @param $idUser
         */
        public function __construct($datafono, $cambio, $estado, $idUser)
        {
            $this->datafono = $datafono;
            $this->cambio = $cambio;
            $this->estado = $estado;
            $this->idUser = $idUser;
        }

        /**
         * @return mixed
         */
        public function getDatafono()
        {
            return $this->datafono;
        }

        /**
         * @param mixed $datafono
         */
        public function setDatafono($datafono): void
        {
            $this->datafono = $datafono;
        }

        /**
         * @return mixed
         */
        public function getCambio()
        {
            return $this->cambio;
        }

        /**
         * @param mixed $cambio
         */
        public function setCambio($cambio): void
        {
            $this->cambio = $cambio;
        }

        /**
         * @return mixed
         */
        public function getEstado()
        {
            return $this->estado;
        }

        /**
         * @param mixed $estado
         */
        public function setEstado($estado): void
        {
            $this->estado = $estado;
        }

        /**
         * @return mixed
         */
        public function getIdUser()
        {
            return $this->idUser;
        }

        /**
         * @param mixed $idUser
         */
        public function setIdUser($idUser): void
        {
            $this->idUser = $idUser;
        }


        public function __toString()
        {
            return 'Datafono= '. $this->datafono.' Cambio= '. $this->cambio. ' Estado= '.$this->estado.' Usuario= '.$this->idUser;
        }


        /**
         * Inserta un nuevo pedido en base de datos
         * @return mixed|void
         * @access public
         */
        function crearPed(){

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
                $insert->prepare("INSERT INTO pedido (datafono, cambio, estado, idU) VALUES ($this->datafono,$this->cambio,'$this->estado',$this->idUser);");
                $insert->execute();
                $insert->close();

                $consulta = $conexion->stmt_init();
                $consulta->prepare("SELECT LAST_INSERT_ID();");
                $consulta->execute();
                $consulta->bind_result($id);
                $consulta->fetch();
                $consulta->close();
                return $id;
            }catch(Exception $ex){

                //Si no, lanzamos otra
                echo $ex->getMessage(), "<br>";

            }

            //Cerramos la conexion a db
            $conexion->close();
        }

        /**
         * Devuelve el estado de un pedido por su id
         * @return mixed|void
         * @access public
         * @static
         */
        static function verEstado($id){

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

                $consulta = $conexion->stmt_init();
                $consulta->prepare("SELECT estado from pedido where id=$id");
                $consulta->execute();
                $consulta->bind_result($estado);
                $consulta->fetch();
                $consulta->close();
                return $estado;
            }catch(Exception $ex){

                //Si no, lanzamos otra
                echo $ex->getMessage(), "<br>";

            }

            //Cerramos la conexion a db
            $conexion->close();
        }

        /**
         * Actualiza el estado del pedido
         * @return void
         * @access public
         * @static
         * @param $id
         * @param $estado
         */
        static function actEstado($id, $estado) : void{

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
                $update->prepare("update pedido set estado = '$estado' where id = $id");
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