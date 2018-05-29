<?php

function contar_usuarios(){
  $archivo = 'contador.txt';

  if (file_exists($archivo)) {
    $cuenta = file_get_contents($archivo) + 1;
    file_put_contents($archivo, $cuenta);

    return $cuenta;
  } {
    file_put_contents($archivo, 1);
    return 1;
  }
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="estilos.css">
    <title>Contador de Visitas</title>
  </head>
  <body>
    <h1>Contador de visitas</h1>
    <div class="visitantes">
      <p class="numero"> <?php echo contar_usuarios(); ?> </p>
      <p class="texto">Visitas</p>
    </div>

  </body>
</html>
