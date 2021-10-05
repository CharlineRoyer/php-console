<?php

$data = [];
$arguments = count($argv);

for($i = 1; $i<$arguments; $i++){
    array_push($data, $argv[$i]);
}
sort($data);

// var_dump($data);
$json=json_encode($data);
file_put_contents("contenu.json", $json); 