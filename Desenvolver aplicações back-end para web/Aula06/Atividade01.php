<?php
    $matriz = array(
        array(1,2,3,4),
        array(5,6,7,8),
        array(9,10,11,12),
        array(13,14,15,16),
    );
    for($linha = 0; $linha < 4; $linha++){
        for($coluna = 0; $coluna < 4; $coluna++){
            echo " | ".$matriz[$linha][$coluna]." | ";
        }
        echo "<br>";
    }
?>