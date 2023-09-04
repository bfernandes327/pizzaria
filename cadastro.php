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
    <link rel="stylesheet" href="css/cadastro.css">
</head>
<body>
<form action="pizza.php" method="post">
<div class="pai">
    <div class="background-image"></div>
    
  <!-- <form action=""></form> -->

  <div class="caixa">

    <div class="cad">
      <span>Cadastro</span>
    </div>

    <div class="inputarea">
      
        <form action="salvacadastro.php" method="post">
          <input type="text" name="nome" id="nome" placeholder="Nome:"><br>
          <input type="email" name="email" id="email" placeholder="E-mail:"><br>
            <input type="password" name="senha" id="senha" placeholder="Senha:"><br>
              <input type="password" name="senha" id="senha" placeholder="Confirmar senha:"><br>
              <input id="telNo" type="number" placeholder="Número tel" /> <br>
               <input type="text" name="endereço" id="endereço" placeholder="Endereço:"> <br>
                <!-- <input type="submit" value="Cadastrar">
                  -->
                  <a href="URL"><button class="botao">Cadastrar</button>
        </form>
        </a>
    </div>
  </div>
 
</div>
</form>

</body>
</html>