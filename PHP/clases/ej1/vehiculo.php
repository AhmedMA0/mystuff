<?php
    class Vehiculo{

        private $color;
        private $peso;

        public function __construct($color='rojo', $peso='0') {
            $this->color = $color;
            $this->peso = $peso;
        }
        
        public function circula(){
            echo 'El vehiculo circula';
        }

        public function añadirPersona ($pesoPersona){
            echo 'Añadiendo persona';
            $this->peso+=$pesoPersona;
        }

        public function getColor(){
            return $this->color;
        }

        public function setColor($color){
            $this->color = $color;
        }

        public function getPeso(){
            return $this->peso;
        }

        public function setPeso($peso){
            $this->peso = $peso;
        }
    }
?>