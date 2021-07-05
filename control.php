<?php

include_once( $_SERVER['DOCUMENT_ROOT'] . "/config.inc.php" );
include_once(DIR_INC . "class.mysql.inc.php");
$bd = new class_mysql();
$bd->insertar($_GET['temp'] , $_GET['volt'], $_GET['hum']);


?>