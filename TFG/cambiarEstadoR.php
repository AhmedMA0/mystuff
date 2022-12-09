<?php
    require_once('clases/includes.php');
    require_once('./esendex/vendor/autoload.php');

    $estado = $_GET['estado'];
    $tlf = strval($_GET['tlf']);
    $tlf = str_replace('P','+',$tlf);
    $id = $_GET['id'];
            
    Reserva::actEstado($id, $estado);
    $estado = strtoupper($estado);

    $message = new \Esendex\Model\DispatchMessage(
        "MOSUSHI", // Send from
        $tlf, // Send to any valid number
        "-MOSUSHI- *RESERVA NÚMERO: $id. Su reserva esta ahora en estado: $estado",
        \Esendex\Model\Message::SmsType
    );

    $authentication = new \Esendex\Authentication\LoginAuthentication(
        $esendexAccRef, // Your Esendex Account Reference
        $essendexEmail, // Your login email address
        $essendexPass // Your password
    );

    $service = new \Esendex\DispatchService($authentication);
    $result = $service->send($message);
?>