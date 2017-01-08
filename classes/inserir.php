<?php
  $usuario = new Usuarios();
  $nome             = $_POST['tNome'];
  $email            = $_POST['tEmail'];
  $senha            = $_POST['tSenha'];
  $emailRecuperacao = $_POST['tEmailRecuperacao'];

  $usuario->setNome($nome);
  $usuario->setEmail($email);
  $usuario->setSenha($senha);
  $usuario->setEmailRecuperacao($emailRecuperacao);

  # Insert
  if($usuario->insert()){
     echo "Inserido com sucesso!";
  }
?>
