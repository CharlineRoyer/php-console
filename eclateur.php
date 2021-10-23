<?php

function cutWorld($mot)
{
    return str_split($mot);
}

$tableau = cutWorld(strtolower($argv[1]));

$motEclate = array();

foreach (array_count_values($tableau) as $key => $mot) {
    $motEclate[$key] = $mot;
}

ksort($motEclate);
foreach ($motEclate as $key => $mot) {
    echo $key . ' => ' . $mot . PHP_EOL;
}
