<?php
    session_start();

    require_once('clases/includes.php');

    $user = new Usuario($_POST['nombre'],$_POST['tlf'],$_POST['dir']);

    $idUser = $user->crearUser();
    
    $reserva = new Reserva(str_replace('T',' ',$_POST['fecha']).":00", 'pendiente', $idUser);

    $idRes = $reserva->crearRes();

    $_SESSION['idUser'] = $idUser;
    $_SESSION['idRes'] = $idRes;

    header('Location: verReservaC.php');

?>