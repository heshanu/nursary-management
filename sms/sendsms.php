<?php
require_once 'vender/autoload.php';

$basic  = new \Nexmo\Client\Credentials\Basic('6909aef0', 'mCJooLrmfzGUeKD4');
$client = new \Nexmo\Client($basic);

$message = $client->message()->send([
    'to' => '94775163610',
    'from' => 'Vonage APIs',
    'text' => 'Hello from Pre school!'
]);

?>