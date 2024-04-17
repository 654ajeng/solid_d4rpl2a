<?php

include_once "MySQL.php";
include_once "MongoDB.php";
include_once "DBMS.php";
include_once "DBMSConnection.php";


$mysql = new MySQL();
$mysql->createConnection();


$mongoDB = new MongoDB();
$mongoDB->createConnection();


$dbmsConnection = new DBMSConnection();
$dbmsConnection->connect($mysql);


$dbmsConnection->connect($mongoDB);

?>
