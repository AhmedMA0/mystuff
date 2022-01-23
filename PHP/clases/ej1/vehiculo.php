<?php
    class Vehiculo{

        private $color;
        private $peso;
        private $numero_cadenas_nieve;
        private $longitud;

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

        public function repintar ($color){
            $this->color = $color;
        }

        public function poner_gasolina ($litros){
            $this->peso += $litros;
        }

        public function añadir_cadenas_nieve(){
            ++$this->numero_cadenas_nieve;
        }

        public function quitar_cadenas_nieve(){
            --$this->numero_cadenas_nieve;
        }

        public function añadir_remolque($longitud){
            $this->longitud+=$longitud;
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