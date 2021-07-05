<?php

class class_mysql
{
	var $MySQL_host;
	var $MySQL_user;
	var $MySQL_passwd;
	var $MySQL_dbname;

	var $MYSQL_debug;	//	Si es true (defecto) presenta mensajes de error
	//var $error_msg;		//	Contiene el mensaje de error a enviarse al navegador
	var $connection;


	function class_mysql()
	{
		$this->MySQL_host = MYSQL_HOST;
		$this->MySQL_user = MYSQL_USER;
		$this->MySQL_passwd = MYSQL_PASSWD;
		$this->MySQL_dbname = MYSQL_DBNAME;
		//$this->MYSQL_debug = MYSQL_DEBUG;
		// Creates a connection to the database
		$this->connection = $this->connect();
	}


	function connect()
	{

		// Sets the default False value for returning
		$result = false;

		// stablishes a connection with MySQL server in $connection variable
		//$conn = mysqli_connect("localhost", "USER", "PASSWORD", "BASEDATA NAME");
		$connection = mysqli_connect("localhost", "admin_web1", "admin_web1", "admin_web1");

		// handles the possible error in connection
		if (!$connection) {
			// sends an error message on FALSE connection
			$error_msg = "<center><h2>FALLO AL CONECTAR A LA BASE DE DATOS.<BR>informe al administrador del sitio<br>";
			$error_msg .= "Error: " . mysqli_error($connection) . "<h2></center>";
			$this->send_error_msg($error_msg);
		} 
		
		/*else {
			// assigns the $dbname database to the $connection connection
			mysql_select_db($this->MySQL_dbname, $connection);
			$result = $connection;
		}*/

		// returns the resource assigned for further use or FALSE on error
		return $connection;
	}


	function send_error_msg($error_msg)
	{
		if ($this->MYSQL_debug)
			echo $error_msg;
		//			exit;
	}

	function query($sentence)
	{
		// Initializes the returning variable
		$result = false;

		// handles the possible error in connection
		if ($this->connection) {

			$result = $this->connection->query($sentence);

			// handles a possible error in sentence or execution
			if (!$result) {

				//sends an error message when error in SQL sentence execution happen
				$error_msg = "<center><h3>Fallo al ejecutar la sentencia<h3><h4>$sentence<br>";
				$error_msg .= "Error: " . mysqli_error($this->connection) . "<h2></center>";
				$error_msg .= "</h4></center>";
				$this->send_error_msg($error_msg);
			}
			// Closes the current connection to MySQL
			//				mysql_close ( $connection );
		}

		return $result;
	}

	//
	//	Gets the maximum value of the Id field in $table table
	//



	function insertar($t, $v, $h)
	{
		$bd = $this->connect();
		$sql = "INSERT INTO `Datos` (`id`, `temp`, `volt`, `hum`) VALUES (NULL,'".$t."','".$v."','".$h."');";
		return $bd->query($sql);
	}

	function insertar1($t, $p, $h, $f)
	{
		$bd = new class_mysql();
		$sql = "INSERT INTO almacenes (id, Tienda, Ventas,Fecha) VALUES (NULL, '" . $t . "', '" . $p . "', '" . $f . "')";
		return $bd->query($sql);
	}

	function listar()
	{
		$bd = new class_mysql();
		$sql = "SELECT  * FROM Datos";
		echo $sql;
		return $bd->query($sql);
		
	}
} // closes the class definition
