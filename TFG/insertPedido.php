<?php

    require_once('clases/includes.php');

    print_r($_POST); echo '<br>';

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

    echo $idPed;

?>