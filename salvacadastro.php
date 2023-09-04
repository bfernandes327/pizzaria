<?php

    require_once 'conf.php';

    echo "<pre>";
    print_r($_POST);

    

    $n = $_POST['nome'];
    $e = $_POST['email'];
    $endereço = $_POST['endereço'];
    $l = $_POST['telNo'];
    $s = $_POST['senha'];

    echo $sql = "insert into cliente(nome,email,endereco,telNo,senha) values ('".$n."','".$e."','".$endereço."','".$l."','".$s."')";
  $comando = $mysqli->query($cad);
  $comando = $mysqli->affected_rows;
  print_r($comando);

    

    if (isset($comando)){

        echo "<br>Cadastro realizado com sucesso";

    }

?>