<?php

	define( "DIR_RAIZ", $_SERVER['DOCUMENT_ROOT'] );
	define( "DIR_INC", DIR_RAIZ . "/includes/" );
	
	define( "HOST", "http://" . $_SERVER['HTTP_HOST'] );
	define( "DIR_IMG", HOST . "/images/" );

	define( "MYSQL_HOST", "avanzadasprac1.ga" );
	define( "MYSQL_USER", "admin_web1" );
	define( "MYSQL_PASSWD", "admin_web1" );
	define( "MYSQL_DBNAME", "admin_web1" );
	
	/*echo $_SERVER['DOCUMENT_ROOT']."<br>";
	echo DIR_RAIZ."<br>";
	echo HOST."<br>";
	echo DIR_INC."<br>";
	echo DIR_IMG."<br>";
	echo MYSQL_HOST;*/

?>
