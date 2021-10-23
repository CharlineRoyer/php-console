<?php



$json = file_get_contents("data.json");
$parsed_json = json_decode($json);

function binarySearch($argv, $parsed_json)
{
    $min = 0;
    $max = count($parsed_json);
    $milieu = ($min+$max)/2;
    $milieu2 = intval($milieu);
    $tableau = $parsed_json;
    $step = 0;
    $bidule = 0 ;
  

    while($bidule == 0 && $min<$max ){    

       if($argv == $parsed_json[$milieu2]->{'name'}){
        $bidule == 1;
        break;
       }else if ($argv < $parsed_json[$milieu2]->{'name'}){
        $max = $milieu2 - 1;
        $step ++;
       }else if($argv > $parsed_json[$milieu2]->{'name'}){
        $min = $milieu2 +1 ;
        $step++;
       }
        $milieu2 = intval(($min + $max)/2);

    }


    if($argv == $parsed_json[$milieu2]->{'name'}){
        $milieu3 = $milieu2+1;
        echo"number: ";
        echo ($parsed_json[$milieu2]->{'num'}) ;
        echo PHP_EOL;
        echo"Position: $milieu3";
        echo PHP_EOL;
        echo "Step:  $step";
        echo PHP_EOL;
    }else{
        echo "Ce nom n'est pas dans le tableau";
    }
   

}



binarySearch($argv[1], $parsed_json);




