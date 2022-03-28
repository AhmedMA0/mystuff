<?php

    require_once ('../app/conexion.inc.php');
    require_once ('../app/config.inc.php');
    require_once ('../model/Empleado.php');

    $empleado = new Empleado();
    $empleado2 = new Empleado();
    $empleado2->setApellido1('Roma');
    $empleado2->setDni('12121212A');


    $db = Conexion::openConexion();

    Empleado::crearEmpleado($db, $empleado);
    Empleado::crearEmpleado($db, $empleado2);

    
    Empleado::leerEmpleado($db, $empleado);

    echo '<br><br>';
    
    Empleado::leerEmpleado($db, $empleado2);
    $empleado2->setApellido1('Romerito');
    Empleado::actualizarEmpleado($db, $empleado2);
    echo '<br>';

    Empleado::leerEmpleado($db, $empleado2);
    Empleado::borrarEmpleado($db, $empleado);