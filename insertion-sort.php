<?php

/*
 * Complete the 'insertionSort1' function below.
 *
 * The function accepts following parameters:
 *  1. INTEGER n
 *  2. INTEGER_ARRAY arr
 */

function insertionSort1($n, $arr) {
    // Write your code here

   // Guardamos el último número, que es el que vamos a insertar en su lugar correcto
    $valueToInsert = $arr[$n - 1];
    
    // Empezamos a revisar desde el penúltimo número hacia el inicio
    for ($i = $n - 2; $i >= 0; $i--) {
        
        // Si el número actual es mayor que el que queremos insertar
        if ($arr[$i] > $valueToInsert) {
            // Movemos el número actual una posición a la derecha
            $arr[$i + 1] = $arr[$i];

            // Mostramos el arreglo en cada paso
            echo implode(' ', $arr) . "\n";
        } else {
            // Si encontramos un número menor o igual, ahí insertamos el valor
            $arr[$i + 1] = $valueToInsert;

            // Mostramos cómo queda el arreglo después de insertar
            echo implode(' ', $arr) . "\n";

            // Ya no seguimos, salimos de la función
            return;
        }
    }

    // Si llegamos al inicio del arreglo, insertamos el valor al principio
    $arr[0] = $valueToInsert;

    // Mostramos el arreglo final
    echo implode(' ', $arr) . "\n";
}

$n = intval(trim(fgets(STDIN)));

$arr_temp = rtrim(fgets(STDIN));

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

insertionSort1($n, $arr);
