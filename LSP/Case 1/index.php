<?php

include_once "whatsApp.php";
include_once "instagram.php";
include_once "social_media.php";


$vidioGroupManager = new VidioGroupManager();


$postMediaManager = new PostMediaManager();


$whatsApp = new WhatsApp($vidioGroupManager);
$whatsApp->chat();
$whatsApp->sendPhotosAndVideos();
$whatsApp->callGroupVidio();

$instagram = new Instagram($postMediaManager);
$instagram->chat();
$instagram->sendPhotosAndVideos();
$instagram->publishPost();

?>
