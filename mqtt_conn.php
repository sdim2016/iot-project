<?php
/*
//FOR DEBUGGING PURPOSES:
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
*/
include 'authenticate.php';
require './vendor/bluerhinos/phpmqtt/phpMQTT.php';
$server = "142.93.228.27";
$port = 1883;
$username = "dmitrii";
$password = "dmitrii";
$client_id = "phpMQTT-publisher".uniqid();

$mqtt = new Bluerhinos\phpMQTT($server, $port, $client_id);

if ($mqtt->connect(true, NULL, $username, $password)) {
	$mqtt->publish("test", $_GET["send"], 0);
	$mqtt->close();
} else {
    echo "Time out!\n";
}
?>
