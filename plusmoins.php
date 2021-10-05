<?php

// var_dump($argv);

function start($min, $max, $vies){
    $depart = $vies;

    $chiffre = rand($min,$max);
    $statu = false;
    $solution = "";

    while($vies > 0 && $statu == false){


        if($vies == $depart){
            echo "écrivez un chiffre entre $min et $max \n";
        }else{
            echo "\n \n Perdu ! il vous reste $vies vies \n écrivez un chiffre entre $min et $max qui est $solution que le précédent \n";
        }
        
        $reponse = readline("");
        echo "vous avez répondu le chiffre $reponse \n";

        

        if($reponse < $chiffre){
            $vies--;
            $solution = "plus grand ";
            if($vies == 0){
                echo "vous avez perdu le chiffre était $chiffre";
            }
            
        }else if($reponse > $chiffre){
            $vies --;
            $solution = "moins grand ";
            if($vies == 0){
                echo "vous avez perdu le chiffre était $chiffre\n";
            }
            
        }else{
            echo "vous avez gagné";
            $statu = true;
        }
       
    }

    demandeSiRejoue();
}

function demandeSiRejoue(){
  
    echo "voulez-vous recommencer? \n";
    $reponse2 = readline("yes or no ? ");


    if($reponse2 =="yes"){
        echo "chiffre minimum";
        $min = readline("");
        echo "chiffre max";
        $max = readline("");
        echo "nombres de vies";
        $vies = readline("");

        start($min, $max, $vies);

    }else{
        echo"byebye!";
    }
}

start($argv[1], $argv[2], $argv[3]);