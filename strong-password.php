<?php

/*
 * Complete the 'minimumNumber' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts following parameters:
 *  1. INTEGER n
 *  2. STRING password
 */

function minimumNumber($n, $password) {
    // Return the minimum number of characters to make the password strong


    
    $numbers = "/[0-9]/";                    // para verificar si hay al menos un número
    $lower_case = "/[a-z]/";                 // para verificar si hay al menos una minúscula
    $upper_case = "/[A-Z]/";                 // para verificar si hay al menos una mayúscula
    $special_characters = "/[!@#$%^&*()\-+]/"; // para verificar si hay al menos un carácter especial

    // Contador para saber cuántos tipos de caracteres faltan
    $missing_types = 0;

    // Si no hay números, sumamos 1
    if (!preg_match($numbers, $password)) {
        $missing_types++;
    }
    // Si no hay minúsculas, sumamos 1
    if (!preg_match($lower_case, $password)) {
        $missing_types++;
    }
    // Si no hay mayúsculas, sumamos 1
    if (!preg_match($upper_case, $password)) {
        $missing_types++;
    }
    // Si no hay caracteres especiales, sumamos 1
    if (!preg_match($special_characters, $password)) {
        $missing_types++;
    }

    // Sumamos el largo actual más los tipos que faltan
    $total_length_after_type_fixes = $n + $missing_types;
    
    // Si después de agregar los tipos aún no llegamos a los 6 caracteres mínimos
    if ($total_length_after_type_fixes < 6) {
        // Devolvemos los tipos que faltan + los caracteres extra que se necesitan para llegar a 6
        return $missing_types + (6 - $total_length_after_type_fixes);
    } else {
        // Si ya se cumple el mínimo de 6 caracteres, solo devolvemos los tipos que faltaban
        return $missing_types;
    }
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$n = intval(trim(fgets(STDIN)));

$password = rtrim(fgets(STDIN), "\r\n");

$answer = minimumNumber($n, $password);

fwrite($fptr, $answer . "\n");

fclose($fptr);
