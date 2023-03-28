<?php

    $vetor = [];

    for($c = 0; $c <= 20; $c++){
    
        array_push($vetor, $c);
        if($vetor[$c]%2==1){

            print_r("Valores impares: $vetor[$c]\n");
        }
    }

?>