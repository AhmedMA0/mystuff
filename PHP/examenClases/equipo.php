<?php
    class Equipo{
        protected $nombreEquipo;
        protected $numeroJugadores;
        protected $jugadores;


        public function __construct($nombreEquipo='EquipoA', $numeroJugadores=5){
            $this->nombreEquipo = $nombreEquipo;
            $this->numeroJugadores = $numeroJugadores;

            for ($i=0; $i < $numeroJugadores; $i++) {
                $jugadores[$i] = new Jugador();
            }
            $this->jugadores = $jugadores;
        }

        public function resize($tam){
            for ($i=0; $i < sizeof($this->jugadores); $i++) {
                $this->jugadores[$i] = '';
            }

            for ($i=0; $i < $tam; $i++) {
                $jugadores[$i] = new Jugador();
            }
            $this->jugadores = $jugadores;
        }

        public function __destruct(){

        }

        public function getJugador($i){
            return $this->jugadores[$i];
        }

        public function setJugador($i, $datos){
            $this->jugadores[$i] = '';
            $this->jugadores[$i] = new Jugador($datos['nombre'],$datos['apellidos'],$datos['direccion'],$datos['puesto']);
        }

        public function imprimirEquipo(){
            echo '<table>';
            echo '<tr><td>Nombre</td><td>'.$this->nombreEquipo.'</td></tr>';
            echo '<tr><td>N. Jugadores</td><td>'.$this->numeroJugadores.'</td></tr>';
            echo '</table>';
            echo '<table><th>Nombre</th><th>Apellidos</th><th>Direccion</th><th>Puesto</th>';

            for ($i=0; $i < sizeof($this->jugadores); $i++) { 
                echo '<tr><td>'.$this->jugadores[$i]->getNombre().'</td><td>'.$this->jugadores[$i]->getApellidos().'</td><td>'.$this->jugadores[$i]->getDireccion().'</td><td>'.$this->jugadores[$i]->getPuesto().'</td></tr>';
            }

            echo '</table>';
        }

        public function leerEquipo($jugadores){

            for ($i=0; $i < sizeof($this->jugadores); $i++) {
                $this->jugadores[$i] = '';
            }

            $j = 0;
            foreach ($jugadores as $key => $value) {
                $this->jugadores[$j] = $jugadores[$key];
                ++$j;
            }
        }
    }
?>