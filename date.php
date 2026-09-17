<?php


date_default_timezone_set("America/El_Salvador");

$fecha_us=date("1 d F Y");
$fecha_es=date("d-m-Y");

$hora_12=date("h:1 a");
$hora_20=date("H:i");

$fecha_completa=date("1 d F Y h:1 A");
echo $fecha_completa;