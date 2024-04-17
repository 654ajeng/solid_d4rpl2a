<?php

include_once "Shape2Dimension.php";
include_once "Shape3Dimension.php";


$persegi = new Persegi();
$persegi->calculateArea();


$kubus = new Kubus($persegi);
$kubus->calculateArea();
$kubus->calculateVolume();

?>
