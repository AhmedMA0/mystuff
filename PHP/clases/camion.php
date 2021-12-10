<?php
    class Camion extends CuatroRuedas{
        
        private $longitud;
        
        public function añadirRemolque($longRemolque){
            echo 'Añadiendo un remolque de ', $longRemolque,' m.';
        }
    }
?>