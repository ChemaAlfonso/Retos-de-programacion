<?php
/*
 * Un entero se dice que es un palíndromo si es igual al número que se obtiene al invertir el orden de sus cifras.
 * Por ejemplo, 79197 y 324423 son palíndromos. 
 * 
 * En esta tarea se le dará un entero N, 1 <= N <= 1.000.000 
 * Usted debe encontrar el menor entero M tal que M >= N M es primo y es un palíndromo.
 * 
 * *Por ejemplo, si N es 31, entonces la respuesta es 101.
 * 
 * Formato de entrada:
 * Un solo entero N, (1 <= N <= 1.000.000), en una sola línea.
 * 
 * Formato de salida:
 * Su salida debe consistir en un solo número entero, el más pequeño palíndromo primo mayor que o igual a N.
 *
 */

 //Solución personal


 //Comprobación si es primo
function esPrimo( $num ){

    $divisor = 2;

    while( $divisor <= $num ){
        
        if ( $num % $divisor === 0 ){
            if ( $divisor !== $num ){
                return false;
            }
        }        
        $divisor++;
    }
    return true;

}

//Comprobación si es palíndromo
function esPalindromo( $n ){

    //Separamos las cifras
    $number = str_split( $n );
    $output = [];

    //Les damos la vuelta
    for ( $i = count($number) - 1 ; $i >= 0; $i-- ){
        $output[] .= $number[$i]; 
    }

    //Las rearmamos del revés
    $reverseNumber = (int)implode($output);
    
    //Si coinciden es palíndromo
    if ( $n === $reverseNumber ){
        return true;
    }

    return false;

}

//Función principal
function operacion( $n ){

    //Comprobamos que el número es válido
    if ( $n >= 0 && $n < 1000000 ){

        for( $i = $n; $i <= 1000000 ; $i++ ){
            
            if ( esPalindromo( $i ) ){

                if ( esPrimo( $i ) ){
                    return "El resultado es: $i";
                }
            }
    
        }
    
        return 'No hay ningun numero que cumpla los requisitos';

    } else {
        return 'Ingrese un número entre 0 y 1000000';
    }

}

//Ejecutamos la función
print_r( operacion( 31 ) );