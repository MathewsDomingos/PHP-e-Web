<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Parâmetro com mais de um valor</title>
</head>
<body>

<?php
    if(isset($_POST['igredientes'])){
      $igredientes = $_POST['igredientes'];
      print_r($igredientes);
    }
  ?>

  <form action="index.php" method="POST">
    <p>Lista de igredientes</p>
    <div><input type="checkbox" name="igredientes[]" value="tomate">Tomate</div>
    <div><input type="checkbox" name="igredientes[]" value="abobora">Abóbora</div>
    <div><input type="checkbox" name="igredientes[]" value="feijao">Feijão</div>
    <div><input type="checkbox" name="igredientes[]" value="alface">Alface</div>
    <div><input type="checkbox" name="igredientes[]" value="cebola">Cebola</div>
    <div><input type="submit" value="Enviar"></div>
  </form>
</body>
</html>