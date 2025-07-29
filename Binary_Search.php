<?php

function binarySearch($nums, $target) {
    $left = 0;
    $right = count($nums) - 1;

    while ($left <= $right) {
        $mid = intdiv($left + $right, 2);
        if ($nums[$mid] === $target) return $mid;
        if ($nums[$mid] < $target) $left = $mid + 1;
        else $right = $mid - 1;
    }

    return -1;
}

echo(binarySearch([1, 2, 3, 4, 5], 3)); 
echo("<br>");
echo(binarySearch([1, 2, 3, 4, 5], 6)); 