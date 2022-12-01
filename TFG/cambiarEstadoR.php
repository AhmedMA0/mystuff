<?php
    require_once('clases/includes.php');
    require_once(__DIR__ . '/twilio/vendor/autoload.php');

    $estado = $_GET['estado'];
    $tlf = strval($_GET['tlf']);
    $tlf = str_replace('P','+',$tlf);
    $id = $_GET['id'];
            
    Reserva::actEstado($id, $estado);
    $estado = strtoupper($estado);

    use Twilio\Rest\Client;

    $client = new Client($account_sid, $auth_token);
    $client->messages->create(
        // Where to send a text message (your cell phone?)
        $tlf,
        array(
        'from' => $twilio_number,
        'body' => "-MOSUSHI- *RESERVA NÚMERO: $id. Su reserva esta ahora en estado: $estado"
        )
    );
?>