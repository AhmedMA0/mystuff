<?php

use Twilio\TwiML\Voice\Echo_;

    require_once('clases/includes.php');

    $estado = $_GET['estado'];
            
    if (!empty($estado)) {
        
        $peds = Pedido::verInfoxEstado($estado);

        if (!empty($peds)) {
            echo '<tr><th>ID</th><th>Estado</th><th>Info. cliente</th><th>Fecha</th><th>Opciones</th></tr>';
            foreach ($peds as $id => $ped) {
                echo '<tr class="ped">';
                echo '<td class="idTd">'.$id.'</td><td class="estadoTd">'.ucfirst($ped['estadoP']).'</td><td class="userTd">'.$ped['nombreU'].' '.$ped['tlfU'].' '.$ped['dirU'].'</td><td class="fechaTd">'.$ped['fechaP'].'</td>';
                echo '<td>';
                echo '<form action="verPedidoAxId.php" method="POST">';
                echo '<input type="hidden" value="'.$id.'" name="idPed">';
                echo '<input type="submit" value="Administrar" name="Go">';
                echo '</form>';
                echo '</td>';
                echo '</tr>';
                echo '<tr class="separador"><td colspan="5"></td></tr>';
            }
        }

        else {
            echo 'No hay pedido '.$estado.'.';
        }

    }

?>