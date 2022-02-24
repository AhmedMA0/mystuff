<?php
    class Camion extends CuatroRuedas{
        
        protected $longitud;
        
        public function añadirRemolque($longRemolque){
            echo 'Añadiendo un remolque de ', $longRemolque,' m.';
        }
        public function getlongitud(){
            return $this->longitud;
        }

        public function setlongitud($longitud){
            $this->longitud = $longitud;
        }
    }
?>