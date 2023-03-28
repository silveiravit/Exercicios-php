<?php

    $val = [10,"Marca","Carro",20,"Chevrolet","Vitor", 39];
    $cont = 0;

    while($cont < 7){
        
        if(is_string($val[$cont])){
            print_r("É uma string $val[$cont]\n");
        }
        $cont++;

    }

?>