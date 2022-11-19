<?php
        echo '<script>console.log("hola");</script>';

        require_once('clases/includes.php');

        $estado = $_GET['estado'];
        $id = $_GET['id'];
                
        Pedido::actEstado($id, $estado);
	?>