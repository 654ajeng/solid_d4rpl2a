<?php

include_once "pembayaran_costumer.php";


$pembayaranCustomer = new PembayaranCustomer();


$pembayaranCustomer->menerimaPembayaran(new Debit());


$pembayaranCustomer->prosesPembayaran();


$pembayaranCustomer->menerimaPembayaran(new Kredit());


$pembayaranCustomer->prosesPembayaran();


$pembayaranCustomer->menerimaPembayaran(new Cash());


$pembayaranCustomer->prosesPembayaran();

?>
