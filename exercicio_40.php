<?php

    $str = "O rato roeu a roupa do rei de roma";
    $totalA = 0;
    $letra = 'h';

    for($i = 0; $i < strlen($str); $i++){

        echo "$str[$i]";
        echo "\n";
        
        if($str[$i] == $letra){
            $totalA = $totalA + 1;
        }

    }

    echo "O total de letras $letra é $totalA .";