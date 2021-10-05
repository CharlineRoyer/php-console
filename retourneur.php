<?php

$phrase = $argv[1];
$mots = explode(" ", $phrase);

$nombreMots = count($mots);

for($i = 0 ; $i < $nombreMots; $i++){
   
   $phraseAEnvers = strrev($mots[$i]);

   echo "$phraseAEnvers ";
}

