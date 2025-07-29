<?php
function marsExploration($s) {
    // El mensaje que esperamos es SOS repetido
    $expected = "SOS";
    $count = 0;

    // Recorremos el mensaje recibido
    for ($i = 0; $i < strlen($s); $i++) {
        if ($s[$i] !== $expected[$i % 3]) {
            $count++;
        }
    }

    // Retornamos el número de alteraciones
    return $count;
}

// Pruebas
$s1 = "SOSSPSSQSSOR";
$s2 = "SOSSOT";
$s3 = "SOSSOSSOS";

echo "Mensaje recibido: $s1" . "<br> Alteraciones que sufrio el mensaje: " .  marsExploration($s1) . "<br><br>";
echo "Mensaje recibido: $s2" . "<br> Alteraciones que sufrio el mensaje: " .  marsExploration($s2) . "<br><br>";
echo "Mensaje recibido: $s3" . "<br> Alteraciones que sufrio el mensaje: " .  marsExploration($s3) . "<br><br>";
