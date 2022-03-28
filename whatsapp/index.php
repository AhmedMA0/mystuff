<?php

require_once ('vendor/autoload.php'); // if you use Composer
	
$token="1ufr9lxj6vuey6nx"; // Ultramsg.com token
$instance_id="instance4299"; // Ultramsg.com instance id
$client = new UltraMsg\WhatsAppApi($token,$instance_id);
	
$to="+34691508932"; 
$body="Mensaje con PHP"; 
$api=$client->sendChatMessage($to,$body);
//check
print_r($api);