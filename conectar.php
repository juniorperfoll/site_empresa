<?php
  $servidor = "localhost";
  $username = "id8062130_empresa";
  $password = "empresa";
  try {
    $conn = new PDO("mysql:host=$servidor;dbname=id8062130_empresa",$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    //echo "Conectou com sucesso!";
  } catch(PDOException $erro) {
      echo "Falha de conexão: ".$erro->getMessage();
  }
?>
