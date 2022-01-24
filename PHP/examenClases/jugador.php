<?php
    class Jugador extends Persona {
        protected $puesto;


        public function __construct($nombre='Ahmed', $apellidos='Mohamed Ahmed', $direccion='Ceuta', $dni='45989898A', $puesto='base'){
            parent::__construct($nombre, $apellidos, $direccion, $dni);
            $ops = ['base','escolta','alero','ala-pivot','pivot'];
            if (in_array($puesto,$ops)) {
                $this->puesto = $puesto;
            }
            else{
                $this->puesto = 'base';
            }
        }

        public function getPuesto()
        {
            return $this->puesto;
        }

        public function setPuesto($puesto): void
        {
            $this->puesto = $puesto;
        }


        public function leerJugador($nombreCompleto, $direccion,$dni, $puesto){

            for ($i=0; $i < sizeof($nombreCompleto); $i++) { 
                $nombre = explode(' ',$nombreCompleto);
            }

            $this->nombre = $nombre[0];
            $this->apellidos = $nombre[1] . $nombre[2];
            $this->direccion = $direccion;
            $this->dni = $dni;
            $this->puesto = $puesto;
        }

        public function imprimirJugador(){
            echo '<table>';
            echo '<tr><td>Nombre</td><td>'.$this->nombre.'</td></tr>';
            echo '<tr><td>Apellidos</td><td>'.$this->apellidos.'</td></tr>';
            echo '<tr><td>Direccion</td><td>'.$this->direccion.'</td></tr>';
            echo '<tr><td>Nombre</td><td>'.$this->dni.'</td></tr>';
            echo '<tr><td>Puesto</td><td>'.$this->puesto.'</td></tr>';
            echo '</table>';
        }

    }
?>