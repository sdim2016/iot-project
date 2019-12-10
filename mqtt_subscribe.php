<?php
/*
include 'authenticate.php';
require './vendor/bluerhinos/phpmqtt/phpMQTT.php';
$server = "142.93.228.27";
$port = 1883;
$username = "dmitrii";
$password = "dmitrii";
$client_id = "phpMQTT-subscriber".uniqid();
set_time_limit(0);

$mqtt = new Bluerhinos\phpMQTT($server, $port, $client_id);
if(!$mqtt->connect(true, NULL, $username, $password)) {
	exit(1);
}
$topics['test'] = array("qos" => 0, "function" => "procmsg");
$mqtt->subscribe($topics, 0);
while($mqtt->proc()){

}
$mqtt->close();
function procmsg($topic, $msg){
		echo "\t$msg\n\n";
    exit(1);
*/
}
