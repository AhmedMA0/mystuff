<?php
    class Coche extends CuatroRuedas{
        public $numCadenasNieve;

        protected static $num_cambio_color = 0;
        
        public function añadirPersona ($pesoPersona){
            parent::añadirPersona($pesoPersona);

            if ($this->peso >= 1500 && $this->numCadenasNieve<=2) {
                echo 'Atención, ponga 4 cadenas para la nieve';
            }
        }
        
        public function añadirCadenasNieve($num){
            echo 'Añadiendo ', $num,' cadenas.';
        }

        public function quitarCadenasNieve($num){
            echo 'Quitando ', $num,' cadenas.';
        }

        public function getNumCadenasNieve(){
            return $this->numCadenasNieve;
        }

        public function setNumCadenasNieve($numCadenasNieve){
            $this->numCadenasNieve = $numCadenasNieve;
        }

        public function setColor($color){
            parent::setColor($color);
            ++Coche::$num_cambio_color;
        }
    }
?>