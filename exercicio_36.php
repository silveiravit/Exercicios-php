<?php
    
    $arr = [];

    for($i = 0; $i <= 30; $i++){

        array_push($arr,$i);

    }

    function recebeNum($arr_2){
        $arrayreturn = [];

        for($c = 0; $c < count($arr_2); $c++){
            if($arr_2[$c] > 7){
                array_push($arrayreturn, $c);
            }
        }
        return $arrayreturn;
    }

    $novoarray = recebeNum();

    print_r($novoarray);
?>