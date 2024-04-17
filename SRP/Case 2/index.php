<?php

include_once "mahasiswa.php";
include_once "mahasiswaView.php";

$mahasiswa = new mahasiswa("2205004", "Ajeng Anye");
$mahasiswaView = new mahasiswaView();
$mahasiswaView->showMahasiswa($mahasiswa);

?>
