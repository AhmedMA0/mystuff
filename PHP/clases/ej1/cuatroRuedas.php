<?php
    class CuatroRuedas extends Empleado{
        private $numPuertas;
        
        public function __construct($numPuertas, $color, $peso) {
            $this->numPuertas = $numPuertas;
            parent::__construct($color, $peso);
        }

    

        public function repintar($color){
            echo 'Pintando de ', $color;
            
        }
    }
?>