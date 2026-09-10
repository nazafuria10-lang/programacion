<?php

#para ver cuantos caracteres tiene el string

$cadena_texto="hola mundo";

$longitud=strlen($cadena_texto);
echo  $cadena_texto ." tiene " .$longitud ." caracteres";

#para ver cuantas palabras tiene el string

$palabras=str_word_count($cadena_texto);
echo $cadena_texto." tiene ".$palabras." palabras <br>";