<?php
    class Vehiculo{
        private $color;
        private $peso;
        
        public function circula(){
            echo 'Circulando';
        }

        public function añadirPersona ($pesoPersona){
            echo 'Añadiendo persona';
        }
    }
    
?>