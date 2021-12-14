<?php
    class Coche extends CuatroRuedas{
        private $numCadenasNieve;
        

        public function __construct() {
            echo 'Hola';
        }
        
        public function añadirCadenasNieve($num){
            echo 'Añadiendo ', $num,' cadenas.';
        }

        public function quitarCadenasNieve($num){
            echo 'Quitando ', $num,' cadenas.';
        }
    }
?>