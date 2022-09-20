<?php
  $validacoes = [];
    if( count($_POST) > 0){

      if($_POST["nome"] === ""){
        $validacoes[] = "Por favor, preencha o nome do usúario!";
      }

      if($_POST["email"] === ""){
        $validacoes[] = "Por favor, preencha o email do usúario!";
      }

      if($_POST["senha"] || $_POST["confirmacao"] === ""){
        $validacoes[] = "Preencha os campos de senha!";
      }

      if($_POST["senha"] != $_POST["confirmacao"]){
        $validacoes[] = "As senhas devem ser iguais!";
      }

      if($_POST["confirmacao"] === ""){
        $validacoes[] = "Por favor, confirme a senha!";
      }

    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Validando Formulário</title>
</head>

<?php if(count($validacoes) ):?>
  <ul>
    <?php foreach($validacoes as $validacao):?>
    <li> <?=$validacao?> </li>
    <?php endforeach; ?>
  </ul>
  <?php endif; ?>

<body>
  <form action="index.php" method="post">
    <div><input type="text" name="nome" placeholder="Digite seu nome"></div>
    <div><input type="email" name="email" placeholder="Digite seu email"></div>
    <div><input type="password" name="senha" placeholder="Digite sua senha"></div>
    <div><input type="password" name="confirmacao" placeholder="Confirme sua senha"></div>
    <div><input type="submit" value="Enviar"></div>
  </form>
</body>
</html>