<?php
#1 minuscula
$cadena_texto= "Hola mundo";

echo strtolower($cadena_texto);


#2 minuscula
$cadena_texto= "Hola mundo";

$cadena_texto=strtolower($cadena_texto);

echo strtolower($cadena_texto);

#3 mayuscula
$cadena_texto= "Hola mundo";

$cadena_texto=strtoupper($cadena_texto);

echo strtoupper($cadena_texto);

#4 primera letra mayuscula

$cadena_texto= "Hola mundo";

$cadena_texto=ucfirst($cadena_texto);

echo ucfirst($cadena_texto);

#5 primera letra de cada palabra mayuscula

$cadena_texto= "Hola mundo";

$cadena_texto=ucwords($cadena_texto);

echo ucwords($cadena_texto);