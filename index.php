<?php
require_once 'conf.php';

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="pai">
    <div class="background-image"></div>
    
    <form action="cadastro.php" method="post">
    <div class="container">
        <span>Pizzaria Muçarela</span>
        
     <div class="areainput">
        <input type="text" name="nome" id="nome" placeholder="Nome:"><br>

        <input type="password" name="senha" id="senha" placeholder="Senha:">
     </div>   
     
        <!-- <button class="button" > Entrar </button> -->
        <a href="URL"><button class="botao">Entrar</button>
        </a>
      
        <p>Não é cliente? Faça <a href="cadastro.php">aqui</a> seu cadastro!
    </div>
    </div>
    </form>
</body>
</html>