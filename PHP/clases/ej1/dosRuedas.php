<?php
    class DosRuedas extends Empleado{
        private $cilindrada;
        
        public function ponerGasolina($litros){
            echo 'Echando ', $litros,'L de gasolina.';
        }
    }
?>