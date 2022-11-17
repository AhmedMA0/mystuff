<?php
    session_start();

    require_once('clases/includes.php');

    $user = new Usuario($_POST['nombre'],$_POST['tlf'],$_POST['dir']);

    $idUser = $user->crearUser();

    if (isset($_POST['card'])) {
        $pedido = new Pedido(1, 0, 'pendiente', $idUser);
    }

    elseif (isset($_POST['camb'])) {
        $pedido = new Pedido(0, 1, 'pendiente', $idUser);
    }

    else {
        $pedido = new Pedido(0, 0, 'pendiente', $idUser);
    }

    $idPed = $pedido->crearPed();

    foreach ($_POST as $key => $value) {
        if (strpos($key, 'Cant')) {
            $prods[str_replace('_',' ',str_replace('Cant', '', $key))]= $value;
        }
    }

    $i = 0;
    foreach ($prods as $key => $value) {
        $precioP = Producto::verPrecioProd($key);
        $lineas[$i] = new Linea($i, $idPed, $key, $value,$precioP*$value);
        $i++;
    }

    foreach ($lineas as $key => $value) {
        $value->crearLinea();
    }
    
    $_SESSION['idUser'] = $idUser;
    $_SESSION['idPed'] = $idPed;
?>