<?php

include_once($_SERVER['DOCUMENT_ROOT'] . "/config.inc.php");
include_once(DIR_INC . "class.mysql.inc.php");
$bd = new class_mysql();
$bd->insertar($_GET['temp'], $_GET['volt'], $_GET['hum']);
$result = $bd->listar();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
</head>

<body>
  <div>Valores</div>
  <table>
    <tr>
      <td>Temperatura</td>
      <td>Voltaje</td>
      <td>Humedad</td>
    </tr>
    <?php
    $i = 0;
    while ($mostrar = mysqli_fetch_array($result)) {
    ?>
      <tr>
        <td> <?php echo $mostrar['id'] ?> </td>
        <td> <?php echo $mostrar['temp'] ?> </td>
        <td> <?php echo $mostrar['volt'] ?> </td>
        <td> <?php echo $mostrar['hum'] ?> </td>
      </tr>
    <?php
      //$i++;
    } ?>
  </table>
</body>

</html>