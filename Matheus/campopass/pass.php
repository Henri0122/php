<?php

    $Usuario = $_POST ['user'];
    $senha = $_POST ['pass'];
    
    echo "<br>";
    echo "Usuário ". $Usuario;
    echo "<br>";
    

?>

<?php
    
    

  if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $senha = $_POST['senha'];
 
    if (strlen($senha) > 8) {
      echo "<p style='color:green;'>A senha contém mais de 8 caracteres.</p>";
    } else {
      echo "<p style='color:red;'>A senha deve conter mais de 8 caracteres.</p>";
    }
  }