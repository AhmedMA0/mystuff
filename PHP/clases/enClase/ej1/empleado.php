<?php
    class Empleado{

        /**
         * @var
         */
        private $nombre;

        /**
         * @var
         */
        private $sueldo;

        /**
         * @param $nombre
         * @param $sueldo
         */
        public function __construct($nombre, $sueldo){
            $this->nombre = $nombre;
            $this->sueldo = $sueldo;
        }

        /**
         * @return void
         */
        public function imp(){
            if ($this->sueldo>3000){
                echo $this->nombre, ' debe pagar impuestos.<br>';
            }
            else{
                echo $this->nombre, ' queda libre de impuestos.<br>';
            }
        }

        /**
         * @return mixed
         */
        public function getNombre()
        {
            return $this->nombre;
        }

        /**
         * @param mixed $nombre
         */
        public function setNombre($nombre): void
        {
            $this->nombre = $nombre;
        }

        /**
         * @return mixed
         */
        public function getSueldo()
        {
            return $this->sueldo;
        }

        /**
         * @param mixed $sueldo
         */
        public function setSueldo($sueldo): void
        {
            $this->sueldo = $sueldo;
        }


    }
    ?>