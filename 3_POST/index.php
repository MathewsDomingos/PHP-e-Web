<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>POST in PHP</title>
</head>
<body>

  <form action="cadastro.php" method="POST">
  <div><input type="text" name="marca" placeholder="Marca do carro"></div>
  <div><input type="text" name="preco" placeholder="Valor do Carro"></div>
  <div><input type="checkbox" name="opcionais[]" placeholder="Teto Solar"> Teto Solar </div>
  <div><input type="checkbox" name="opcionais[]" placeholder="Pelicula"> Pelicula </div>
  <div><input type="checkbox" name="opcionais[]" placeholder="Blindado"> Blindado </div>
    
  <div><input type="submit" value="Enviar"></div>
  </form>

</body>
</html>