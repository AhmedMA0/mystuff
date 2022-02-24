<?php
    class DosRuedas extends Vehiculo{
        protected $cilindrada;
        
        public function ponerGasolina($litros){
            $this->peso+=$litros;
        }

        public function añadirPersona ($pesoPersona){
            echo 'Añadiendo persona';
            $this->peso+=$pesoPersona;
        }

        public function getCilindrada(){
            return $this->cilindrada;
        }

        public function setCilindrada($cilindrada){
            $this->cilindrada = $cilindrada;
        }

    }
?>