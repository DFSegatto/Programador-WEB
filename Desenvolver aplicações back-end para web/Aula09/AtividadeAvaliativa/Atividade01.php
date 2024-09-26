<?php
    function categorizarIdade($idade){
        if($idade <= 12){
            return "Criança";
        }elseif($idade > 12 && $idade <= 17){
            return "Adolecente";
        }elseif($idade >= 18 && $idade <= 59){
            return "Adulto";
        }else{
            return "Idoso";
        }
    }

    echo categorizarIdade(60);
?>