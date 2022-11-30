<?php
    require_once('clases/includes.php');

    $estado = $_GET['estado'];
            
    if (!empty($estado)) {
        
        $reses = Reserva::verInfoxEstado($estado);

        if (!empty($reses)) {
            foreach ($reses as $id => $res) {
                echo '<form class="res" action="verReservaAxId.php" method="POST">';
                echo '<p>Reserva número: '.$id.' Cliente: '.$res['nombreU'].' Tlf: '.$res['tlfU'].' Dir.: '.$res['dirU'].'</p>';
                echo '<p>Estado: '.$res['estadoR'].' Fecha: '.$res['fechaR'].'</p>';
                echo '<input type="hidden" value="'.$id.'" name="idRes">';
                echo '<input type="submit" value="Administrar" name="Go">';
                echo '</form>';
            }
        }

        else {
            echo 'No hay reserva '.$estado.'.';
        }

    }

?>