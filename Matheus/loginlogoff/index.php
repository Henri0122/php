<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

        .card-body {

            padding-left: 800px;
            padding-top: 150px;



        }


    </style>

</head>
<body>

    <div class="card-body">

              <form action="valida_login.php" method="get">
                <div class="form-group">
                  <input type="email" name="email" class="form-control" placeholder="E-mail">
                </div>
                <div class="form-group">
                  <input type="password" name="senha" class="form-control" placeholder="Senha">
                </div>

                 <?php if(isset($_GET['login']) && $_GET['login'] == 'erro'){?>

                   <p>Usuário ou senha inválidos.</p>

                <?php } ?>

                <?php if(isset($_GET['login']) && $_GET['login'] == 'erro2'){?>

                 <p>Primeiro, faça login.</p>

                <?php } ?>



                <button type="submit">Entrar</button>





    
</body>
</html>