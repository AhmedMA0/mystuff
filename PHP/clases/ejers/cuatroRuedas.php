<?php
    class CuatroRuedas extends Vehiculo{
        . $numPuertas;
        
        public function __construct($numPuertas, $color, $peso) {
            $this->numPuertas = $numPuertas;
            parent::__construct($color, $peso);
        }

        public function añadirPersona ($pesoPersona){
            echo 'Añadiendo persona';
            $this->peso+=$pesoPersona;
        }


        public function repintar($color){
            echo 'Pintando de ', $color;
            
        }

        public function getNumPuertas(){
            return $this->numPuertas;
        }

        public function setNumPuertas($numPuertas){
            $this->numPuertas = $numPuertas;
        }

    }
?>