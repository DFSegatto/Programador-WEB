<?php
    function fibonacci($n){ 
        $fn = $n;
        $n1 = 0;
        $n2 = 1;

        for ($i = 1; $i <= $n ; $i++) { 
           $fn = $n1 + $n2;
           $n2 = $n1;
           $n1 = $fn;
        }
        echo $fn;
    }
    fibonacci(12);
?>