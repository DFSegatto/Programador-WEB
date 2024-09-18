<?php
    function contarVogais($frase){
        $fraseOriginal = $frase;
        $frase = str_split(strtolower($frase));
        $vogais = array("a","e","i","o","u");
        $contadorVogais = 0;

        for($i = 0; $i < count($vogais); $i++){
            for($j = 0; $j < count($frase); $j++){
                if($frase[$j] == $vogais[$i]){
                    $contadorVogais++;
                }
            }
        }
        return "Quantidade de vogais na fase '".$fraseOriginal."': ".$contadorVogais;
    }
    echo contarVogais("Teste de vogais: AEIOU");
?>
