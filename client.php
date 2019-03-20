<?php
// create gearman client
error_reporting(E_ALL);
ini_set('display_error',1);

 
$client = new GearmanClient();
$client->addServer('127.0.0.1');

// config
 
$numbers = [
    1, 2
];
 
// do a task with gearman worker
 
$res = $client->doNormal('get_sequence', json_encode($numbers));