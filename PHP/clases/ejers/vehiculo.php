<?php
    abstract class Vehiculo{

        protected const SALTO_DE_LINEA='<br>';
        protected $color;
        protected $peso;
        protected $numero_cadenas_nieve;
        protected $longitud;

        public function __construct($color='rojo', $peso='0') {
            $this->color = $color;
            $this->peso = $peso;
        }
        
        public function circula(){
            echo 'El vehiculo circula <br>';
        }
        public abstract function añadirPersona ($pesoPersona);

        public static function ver_atributo($object){
            echo $object->color,' ', $object->peso,' ', $object->numPuertas,' ', $object->cilindrada,' ', $object->longitud,' ', $object->numero_cadenas_nieve, '<br>';
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

        public function getNumero_cadenas_nieve(){
            return $this->Numero_cadenas_nieve;
        }

        public function setNumero_cadenas_nieve($Numero_cadenas_nieve){
            $this->Numero_cadenas_nieve = $Numero_cadenas_nieve;
        }
        
        public function getLongitud(){
            return $this->longitud;
        }

        public function setLongitud($longitud){
            $this->longitud = $longitud;
        }
    }
?>