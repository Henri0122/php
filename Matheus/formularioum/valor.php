<?php

    if (isset($_GET['nome'])) {
        $nome = ($_GET['nome']);
        echo "Você digitou" . $nome;  
    } else {
        echo "Nenhum dado foi enviado";
    }


?>