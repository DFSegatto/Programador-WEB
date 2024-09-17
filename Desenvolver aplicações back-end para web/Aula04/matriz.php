<?php
    $pessoa = array(
        array("João", 24, "Masc"),
        array("Daniel", 23, "Masc"),
        array("Rafael", 18, "Masc"),
    );

    for($linha = 0; $linha < 3; $linha++){
        for($coluna = 0; $coluna < 3; $coluna++){
            echo  $pessoa[$linha][$coluna]." | ";
        }
        echo "<br>";
    }

?>