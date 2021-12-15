<?php
    include_once 'factura.php';

    $fac1 = new Factura(100,21,Factura::IVA, 10, true,);

    echo $fac1;
