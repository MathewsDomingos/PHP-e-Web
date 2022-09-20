
<?php 

if(isset($_GET['nome'])){
  $nome = $_GET['nome'];
  $sobrenome = $_GET['sobrenome'];
  $idade = $_GET['idade'];
  $dataNasc = $_GET['dataNasc'];
}else{
  $nome = "NOME";
  $sobrenome = "SOBRENOME";
  $idade = "IDADE";
  $dataNasc = "DATA";
}

?>

<pre>
  <h1>Ficha Técnica</h1>
  <h1>O seu nome é: <?=$nome?> <?=$sobrenome?> </h1>
  <h1>Você tem <?=$idade?> anos de idade</h1>
  <h1>Nascido em <?=$dataNasc?> </h1>
</pre>

  