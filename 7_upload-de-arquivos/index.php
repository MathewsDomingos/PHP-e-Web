<?php
  if(isset($_FILES)){
    print_r($_FILES);
  }
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Uploade de arquivos</title>
</head>
<body>

  <!-- Para emviar arquivos para o servidor precisa 
  mudar o enctype para multipart/form-data -->

  <form action="index.php" method="post" enctype="multipart/form-data">
    <div><input type="file" name="imagem"></div>
    <div><input type="submit" value="Enviar"></div>
  </form>
  
</body>
</html>