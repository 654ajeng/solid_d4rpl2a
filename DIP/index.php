<?php

include_once "Device.php";
include_once "Lampu.php";
include_once "KipasAngin.php";
include_once "Saklar.php";

$lampu = new Lampu();
$kipasAngin = new KipasAngin();

$saklarLampu = new Saklar($lampu);
$saklarKipasAngin = new Saklar($kipasAngin);

$saklarLampu->operasikan(); 
$saklarKipasAngin->operasikan();

$saklarLampu->operasikan();
$saklarKipasAngin->operasikan(); 

?>
