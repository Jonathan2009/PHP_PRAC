<?php

include_once( $_SERVER['DOCUMENT_ROOT'] . "/config.inc.php" );
include_once(DIR_INC . "class.mysql.inc.php");
$bd = new class_mysql();
$bd->insertar($_GET['temp'] , $_GET['volt'], $_GET['hum']); ?>
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
      $cbd->insertar($_GET['temp'] , $_GET['volt'], $_GET['hum']); ?> 
      $i=0;
      while($i<=10){

      ?>
      <tr>
          <td>34</td>
          <td>23</td>
          <td>667</td>
      </tr>
      <?php
      $i++;
    }?>
    </table>
  </body>
</html>
