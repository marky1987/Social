
<?php

require_once 'ConfigDB.php';


class Conexion extends PDO
{
	private static $instance= NULL;

	public function __construct()
	{
		

	}	

	public function getInstance()
	{

		if (!self::$instance) {

			try{	
				$conexion = new ConfigDB();
				self::$instance = new PDO('mysql:host='.$conexion->m_dbServer.';dbname='.$conexion->m_dbName, $conexion->m_userName, $conexion->m_password);
				self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					echo '<p> conexion realizada con exito</p>';
				}
			catch(PDOException $e)
			{
				echo '<p> No se puede conectar a la base de datos</p>';
				echo $e->getMessage();
				exit;
			}	
		}
		
		return self::$instance;
	
	}
/*
		try
		{
			$conn = new PDO('mysql:host='.$hostname.';dbname='.$db, $username, $pwd);
			echo '<p> conexion realizada con exito</p>';

		}
		catch(PDOException $e)
		{
			echo '<p> No se puede conectar a la base de datos</p>';
			echo $e->getMessage();
			exit;
		}
*/
	
}


?>

