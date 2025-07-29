<?php

//Ejercicio: Implementar el algoritmo de ordenamiento Merge Sort en PHP
//Ordenar un arreglo de números de menor a mayor utilizando el algoritmo “merge sort”

function mergeSort(array $arr): array {
    // Si el arreglo tiene 1 o ningún elemento, ya está ordenado
    if (count($arr) <= 1) {
        return $arr;
    }

    // Dividir el arreglo en dos mitades
    $middle = intdiv(count($arr), 2);
    $left = array_slice($arr, 0, $middle);
    $right = array_slice($arr, $middle);

    // Recursivamente ordenar cada mitad
    $leftSorted = mergeSort($left);
    $rightSorted = mergeSort($right);

    // Combinar las dos mitades ordenadas
    return merge($leftSorted, $rightSorted);
}

function merge(array $left, array $right): array {
    $result = [];

    // Combinar los elementos de forma ordenada
    while (count($left) > 0 && count($right) > 0) {
        if ($left[0] <= $right[0]) {
            $result[] = array_shift($left);
        } else {
            $result[] = array_shift($right);
        }
    }

    // Agregar cualquier elemento restante
    return array_merge($result, $left, $right);
}

// Ejemplo de uso
$numeros = [38, 27, 43, 3, 9, 82, 10, 55, 1, 99];
$ordenado = mergeSort($numeros);

echo "<h2>Ordenamiento Merge Sort</h2>";

// Mostrar el arreglo original
echo "<strong>Arreglo desordenado: </strong>" . implode(", ", $numeros) . "<br>", "<br>";

// Mostrar el arreglo ya ordenado
echo "<strong>Arreglo ordenado: </strong>" . implode(", ", $ordenado);
