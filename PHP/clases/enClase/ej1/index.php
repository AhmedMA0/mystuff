<?php
    include_once 'empleado.php';

    $empleado1 = new Empleado('Manuel',3500);

    $empleado1->imp();
    $empleado1->setSueldo(2500);
    $empleado1->imp();

