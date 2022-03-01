<?php

class Empleado{

    private $nombre;
    private $apellido1;
    private $apellido2;
    private $direccion;
    private $dni;
    private $departamento;
    private $salario;

    /**
     * @param $nombre
     * @param $apellido1
     * @param $apellido2
     * @param $direccion
     * @param $dni
     * @param $departamento
     * @param $salario
     */
    public function __construct($nombre = 'Ahmed', $apellido1 = 'Mohamed', $apellido2 = 'Ahmed', $direccion = 'Ceuta, 12', $dni = '45116029B', $departamento = 'TIC', $salario = 9500){
        $this->nombre = $nombre;
        $this->apellido1 = $apellido1;
        $this->apellido2 = $apellido2;
        $this->direccion = $direccion;
        $this->dni = $dni;
        $this->departamento = $departamento;
        $this->salario = $salario;
    }

    /**
     * @return |string
     */
    public function getNombre() 
    {
        return $this->nombre;
    }/**
     * @param |string $nombre
     */
    public function setNombre( $nombre): void
    {
        $this->nombre = $nombre;
    }/**
     * @return |string
     */
    public function getApellido1()
    {
        return $this->apellido1;
    }/**
     * @param |string $apellido1
     */
    public function setApellido1($apellido1): void
    {
        $this->apellido1 = $apellido1;
    }/**
     * @return |string
     */
    public function getApellido2()
    {
        return $this->apellido2;
    }/**
     * @param |string $apellido2
     */
    public function setApellido2( $apellido2): void
    {
        $this->apellido2 = $apellido2;
    }/**
     * @return |string
     */
    public function getDireccion()
    {
        return $this->direccion;
    }/**
     * @param |string $direccion
     */
    public function setDireccion( $direccion): void
    {
        $this->direccion = $direccion;
    }/**
     * @return |string
     */
    public function getDni()
    {
        return $this->dni;
    }/**
     * @param |string $dni
     */
    public function setDni( $dni): void
    {
        $this->dni = $dni;
    }/**
     * @return |string
     */
    public function getDepartamento()
    {
        return $this->departamento;
    }/**
     * @param |string $departamento
     */
    public function setDepartamento( $departamento): void
    {
        $this->departamento = $departamento;
    }/**
     * @return int|
     */
    public function getSalario()
    {
        return $this->salario;
    }/**
     * @param int| $salario
     */
    public function setSalario( $salario): void
    {
        $this->salario = $salario;
    }

    /**
     * @return string
     * returns all object information under format (lo he escrito yo :D)
     */
    public function __toString(): string
    {
        return $this->nombre.' '.$this->apellido1.' '.$this->apellido2.', vive en '.$this->direccion.', su DNI es '.$this->dni.', trabaja en el departamento de '.$this->departamento.' y su salario es de '.$this->salario.'.';
    }

    /**
     * @param $array
     * @return void
     * fills all object attributes with the given array
     */
    public function setearEmpleado($array){
        $this->nombre = $array['nombre'];
        $this->apellido1 = $array['apellido1'];
        $this->apellido2 = $array['apellido2'];
        $this->direccion = $array['direccion'];
        $this->dni = $array['dni'];
        $this->departamento = $array['departamento'];
        $this->salario = $array['salario'];
    }

     /**
         * @param $db
         * @param $empleado
         * @return void
         ** function that inserts all information regarding an employee, it won't allow repeated id or dni
         */
        public static function crearEmpleado($db, $empleado){
            $nombre = $empleado->getNombre();
            $apellido1 = $empleado->getApellido1();
            $apellido2 = $empleado->getApellido2();
            $direccion = $empleado->getDireccion();
            $dni = $empleado->getDni();
            $departamento = $empleado->getDepartamento();
            $salario = $empleado->getSalario();
            $query = "INSERT INTO empleados (nombre, apellidos, direccion, dni, departamento, salario) VALUES ('$nombre','$apellido1 $apellido2','$direccion','$dni','$departamento','$salario');";

            try {
                $db->query($query);
            } catch (Exception $ex) {
                print "ERROR: " . $ex -> getMessage() . "<br/>";
            }
        }

        /**
         * @param $db
         * @param $empleado
         * @return void
         ** function that returns all information from the employee associated to a given dni, it creates an object and then uses it's function toString
         */
        public static function leerEmpleado($db, $empleado){
            $dni = $empleado->getDni();
            $query = "SELECT * FROM empleados WHERE dni = '$dni';";

            try {
                $exec = $db->query($query);
                $res = $exec->fetch_object();
                $apellidos = explode(' ',$res->apellidos);
                $apellido1 = $apellidos[0];
                $apellido2 = $apellidos[1];
                $empleadoNew = new Empleado($res->nombre, $apellido1, $apellido2, $res->direccion, $res->dni, $res->departamento, $res->salario);
                echo $empleadoNew;
            } catch (Exception $ex) {
                print "ERROR: " . $ex -> getMessage() . "<br/>";
            }
        }

         /**
         * @param $db
         * @param $empleado
         * @return void
         ** function that updates all information regarding the given employee, the logic is: the object has been updated but keeps the same dni so we just use
         ** the hole object to send the new info
         */
        public static function actualizarEmpleado($db, $empleado){
            $nombre = $empleado->getNombre();
            $apellido1 = $empleado->getApellido1();
            $apellido2 = $empleado->getApellido2();
            $direccion = $empleado->getDireccion();
            $dni = $empleado->getDni();
            $departamento = $empleado->getDepartamento();
            $salario = $empleado->getSalario();
            $query = "UPDATE empleados SET nombre = '$nombre', apellidos = '$apellido1 $apellido2',direccion = '$direccion',departamento = '$departamento',salario = '$salario' WHERE dni = '$dni';";

            try {
                $db->query($query);
            } catch (Exception $ex) {
                print "ERROR: " . $ex -> getMessage() . "<br/>";
            }
        }

        /**
         * @param $db
         * @param $empleado
         * @return void
         ** function that just deletes the employee associated with the given one
         */
        public static function borrarEmpleado($db, $empleado){
            $dni = $empleado->getDni();
            $query = "DELETE FROM empleados WHERE dni = '$dni';";

            try {
                $db->query($query);
            } catch (Exception $ex) {
                print "ERROR: " . $ex -> getMessage() . "<br/>";
            }
        }
}