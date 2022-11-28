<?php
        require_once('clases/includes.php');

        $estado = $_GET['estado'];
        $id = $_GET['id'];
                
        Reserva::actEstado($id, $estado);
?>