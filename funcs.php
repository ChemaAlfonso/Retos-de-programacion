<?php
/*
Reto 1.

Dada una serie de palabras separadas por espacios, escribir la frase formada por las mismas palabras en orden inverso. 
Cada palabra estará formada exclusivamente por letras, y existirá exactamente un espacio entre cada pareja de palabras.
La salida debe ser "Case #" seguido del número de caso, de un símbolo de "dos puntos", de un espacio en blanco y de la frase invertida.

*/


//Solución personal

$output = '';

$frases = array(
    'inicio' => 'hola que tal estas bien',
    'chiste' => 'Esta es una frase de prueba',
    'destino' => 'Esta muy oscuro',
    'incoherencia' => 'Hace frio en estas tierras',
    'galleta' => 'La casa de madera'
);


$count = 0;
foreach ($frases as $key => $frase){
    $count++;
    
    $palabras = explode(' ', $frases[$key]);

    for ( $i = count($palabras) - 1 ; $i >= 0; $i-- ){
        $output .= $palabras[$i] . ' '; 
    }

    echo "CASE $count: $output<br>";

    $output = '';
}



