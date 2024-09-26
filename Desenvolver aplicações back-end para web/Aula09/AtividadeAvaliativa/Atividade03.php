<?php
    function somaQuadrados($n){
        $result = 0;
        for ($i=1; $i <= $n ; $i++) { 
            $result += pow($i,2);
        }
        return $result;
    }

    echo somaQuadrados(5);
?>