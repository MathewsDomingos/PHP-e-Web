<?php
  $usuario = [
    'nome' => 'Mateus',
    'idade' => '22',
    'profissao' => 'Programador',
  ];

  if($usuario){
    $nome = $usuario['nome'];
    $idade = $usuario['idade'];
    $profissao = $usuario['profissao'];
  }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Preenchimento de Formulário</title>
</head>
<body>

  <form action="">
    <div><input type="text" value="<?=$usuario['nome']?>"
    placeholder="Digite seu nome" name="nome"></div>

    <div><input type="text" value="<?=$usuario['idade']?>"
    placeholder="Digite sua idade" name="idade"></div>

    <div><input type="text" value="<?=$usuario['profissao']?>"
    placeholder="Profissão" name="profissao"></div>

    <div><input type="submit" value="Enviar"></div>
  </form>
  
</body>
</html>