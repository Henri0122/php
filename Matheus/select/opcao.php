<?php


    if(isset( $_GET ['fruta'])) {
        $frutaselecionada = ($_GET['fruta']);
        echo "Você selecionou " . $frutaselecionada;
    } else {
        
     echo "Selecione uma opção.";
    
    }


?>