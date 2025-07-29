<?php
function heightChecker($heights) {
    // Copiamos el arreglo original
    $expected = $heights;

    // Usamos el algoritmo bubble sort para ordenar el arreglo
    $n = count($expected);
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - 1 - $i; $j++) {
            if ($expected[$j] > $expected[$j + 1]) {
                // Intercambiar elementos
                $temp = $expected[$j];
                $expected[$j] = $expected[$j + 1];
                $expected[$j + 1] = $temp;
            }
        }
    }

    // Contamos las diferencias entre heights y expected
    $count = 0;
    for ($i = 0; $i < $n; $i++) {
        if ($heights[$i] != $expected[$i]) {
            $count++;
        }
    }

    return $count;
}

// Ejemplos 
echo  "Input: [1, 1, 4, 2, 1, 3]" . "<br>Output: " .  heightChecker([1, 1, 4, 2, 1, 3]) . "<br><br>";

echo  "Input: [5, 1, 2, 3, 4]" . "<br>Output: " .  heightChecker([5, 1, 2, 3, 4]) . "<br><br>";

echo  "Input: [1, 2, 3, 4, 5]" . "<br>Output: " .  heightChecker([1, 2, 3, 4, 5]) . "<br><br>";
    