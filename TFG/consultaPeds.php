<?php
    require_once('clases/includes.php');

    $estado = $_GET['estado'];
            
    if (!empty($estado)) {
        
        $peds = Pedido::verInfoxEstado($estado);

        if (!empty($peds)) {
            foreach ($peds as $id => $ped) {
                echo '<form class="ped" action="verPedidoAxId.php" method="POST">';
                echo '<p>Pedido número: '.$id.' Cliente: '.$ped['nombreU'].' Tlf: '.$ped['tlfU'].' Dir.: '.$ped['dirU'].'</p>';
                echo '<input type="hidden" value="'.$id.'" name="idPed">';
                echo '<input type="submit" value="Administrar" name="Go">';
                echo '</form>';
            }
        }

        else {
            echo 'No hay pedido '.$estado.'.';
        }

    }

?>