<?php

session_start();

$usuario_autenticator=false;

$usuarios_app=array(
    array(
        'email' => 'teste@a.com.br',
        'senha' => '1234'
    ),
    array(
        'email' => 'teste@b.com.br',
        'senha' => 'abcd'
    )
);

foreach($usuarios_app as $user) {
    if($user['email']==$_GET['email'] && $user['senha']==$_GET['senha']) {
        $usuario_autenticator=true;
    }
}


if($usuario_autenticator) {
    echo "Usuário autenticado";
    $_SESSION['autenticado']='SIM';
     header('Location: home.php');
} else {
    //echo "Erro. Usuário não encontrado";
    $_SESSION['autenticado']='NAO';
    header('Location: index.php?login=erro');
}
