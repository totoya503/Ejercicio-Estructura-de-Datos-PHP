<?php

/*
 * Complete the 'aVeryBigSum' function below.
 *
 * The function is expected to return a LONG_INTEGER.
 * The function accepts LONG_INTEGER_ARRAY ar as parameter.
 */

function aVeryBigSum($ar)
{
    $sum = 0;
    foreach ($ar as $num) {
        $sum += $num;
    }
    return $sum;
}


$stdin = "5\n1000000001 1000000002 1000000003 1000000004 1000000005\n";


$_fp = fopen("php://temp", "r+");
fwrite($_fp, $stdin);
rewind($_fp);

$fptr = fopen("php://output", "w");

$ar_count = intval(trim(fgets($_fp)));

$ar_temp = rtrim(fgets($_fp));

$ar = array_map('intval', preg_split('/ /', $ar_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = aVeryBigSum($ar);

fwrite($fptr, $result . "\n");
fclose($fptr);
