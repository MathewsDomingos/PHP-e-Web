<?php 

print_r($_SERVER);
echo "<pre>";
  echo $_SERVER['HTTP_HOST'];
echo "</pre>";

if($_SERVER['HTTP_HOST'] == 'localhost'){
  echo "Está usando localhost";
}


?>