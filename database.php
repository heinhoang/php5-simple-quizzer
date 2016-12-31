<?php
//Create connection credentials
$db_host = getenv('IP'); //'localhost';
$db_name = 'quizzer';
$db_user = getenv('C9_USER'); //'root';
$db_pass = '';

//Create mysqli object
$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name);

//Error Handler
if($mysqli->connect_error){
	printf("Connect failed: %s\n", $mysqli->connect_error);
	exit();
}