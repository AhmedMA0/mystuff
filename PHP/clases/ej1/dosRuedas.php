<?php
    class DosRuedas extends Vehiculo{
        private $cilindrada;
        
        public function ponerGasolina($litros){
            echo 'Echando ', $litros,'L de gasolina.';
        }
    }
?>