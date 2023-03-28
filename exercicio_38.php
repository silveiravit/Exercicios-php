<?php

    $lista = ["arroz","cafe","pao","prateleira","caixa"];

    function super($arr){

        $str = "Você levou estes itens do mercado: ";

        for($i=0;$i<5;$i++){
            
            if($i + 1 == count($arr)){
                $str .= "$arr[$i]. ";
            }
            else{
                $str .= "$arr[$i], ";
            }
        }

        echo $str;
    }

    super($lista);
?>