<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GET in PHP</title>
</head>
<body>
  <form action="processar.php" method="GET">
    <div>
      <input type="text" name="nome" placeholder="Primeiro nome">
      <input type="text" name="sobrenome" placeholder="Sobrenome">
      <input type="number" name="idade" placeholder="Digite sua idade">
      <input type="date" name="dataNasc" placeholder="Data de nascimento">
    </div>
    <div><input type="submit" value="Enviar"></div>
  </form>
</body>
</html>