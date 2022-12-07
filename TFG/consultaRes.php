<?php
    require_once('clases/includes.php');

    $estado = $_GET['estado'];
            
    if (!empty($estado)) {
        
        $reses = Reserva::verInfoxEstado($estado);

        if (!empty($reses)) {
            echo '<tr><th>ID</th><th>Estado</th><th>Info. cliente</th><th>Fecha</th><th>Opciones</th></tr>';
            foreach ($reses as $id => $res) {
                echo '<tr class="res">';
                echo '<td class="idTd">'.$id.'</td><td class="estadoTd">'.ucfirst($res['estadoR']).'</td><td class="userTd">'.$res['nombreU'].' '.$res['tlfU'].' '.$res['dirU'].'</td><td class="fechaTd">'.$res['fechaR'].'</td>';
                echo '<td>';
                echo '<form action="verReservaAxId.php" method="POST">';
                echo '<input type="hidden" value="'.$id.'" name="idRes">';
                echo '<input type="submit" value="Administrar" name="Go">';
                echo '</form>';
                echo '</td>';
                echo '</tr>';
                echo '<tr class="separador"><td colspan="5"></td></tr>';
            }
        }

        else {
            echo '<p class="noHay">No hay reserva '.$estado.'.</p>';
        }
    }
?>