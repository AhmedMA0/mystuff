<?php
    class Persona{
        protected $nombre;
        protected $apellidos;
        protected $direccion;
        protected $dni;

        public function     __construct($nombre='Ahmed', $apellidos='Mohamed Ahmed', $direccion='Ceuta', $dni='45989898A'){
            $this->nombre=$nombre;
            $this->apellidos=$apellidos;
            $this->direccion=$direccion;
            $this->dni=$dni;
        }

        public function getNombre(){
            return $this->nombre;
        }

        public function setNombre($nombre){
            $this->nombre=$nombre;
        }

        public function getApellidos(){
            return $this->apellidos;
        }

        public function setApellidos($apellidos){
            $this->apellidos=$apellidos;
        }

        public function getDireccion(){
            return $this->direccion;
        }

        public function setDireccion($direccion){
            $this->direccion = $direccion;
        }

        public function getDni(){
            return $this->dni;
        }

        public function setDni($dni){
            $this->dni = $dni;
        }

        public function __toString(){
            return 'Hola, soy '. $this->nombre.' '. $this->apellidos. ' vivo en '. $this->direccion. ' y mi DNI es '. $this->dni;
        }

        public function leerPersona($persona){
            $this->nombre= $persona['nombre'];
            $this->apellidos = $persona['apellidos'];
            $this->direccion = $persona['direccion'];
            $this->dni = $persona['dni'];
        }

        public function imprimirPersona(){
            echo '<table>';
            echo '<tr><td>Nombre</td><td>'.$this->nombre.'</td></tr>';
            echo '<tr><td>Apellidos</td><td>'.$this->apellidos.'</td></tr>';
            echo '<tr><td>Direccion</td><td>'.$this->direccion.'</td></tr>';
            echo '<tr><td>Nombre</td><td>'.$this->dni.'</td></tr>';
            echo '</table>';
        }

    }
?>