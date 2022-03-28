<?php
    error_reporting(E_ALL);
    ini_set('display_errors','1');

    require_once ('../model/Empleado.php');

    $empleado1 = new Empleado();
    $empleado2 = new Empleado('Juan', 'Perez', 'Sanchez', 'Madrid 12', '25252525Z', 'At. al cliente', 1300);

    echo 'Empleado 1: <br>';
    echo $empleado1;
    $empleado1->setApellido1('Romero');
    echo '<br> Usando setter: '. $empleado1;

    echo '<br><br>Empleado 2: <br>';
    echo $empleado2;
    $datos = array(
        'nombre' => 'Fran',
        'apellido1' => 'Sanchez',
        'apellido2' => 'Garcia',
        'direccion' => 'Ceuta 25',
        'dni' => '23233223A',
        'departamento' => 'Progra.',
        'salario' => 9999
    );

    echo $empleado2->setearEmpleado($datos);
    echo '<br> Usando setearEmpleado: '. $empleado2;
