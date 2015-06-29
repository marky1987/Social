
<?php

	require_once 'Conexion.class.php';
	


class Usuario
{
	private $usuario;
	private $password;
	private $first_name;
	private $last_name;

public function __construct(){

		$this->usuario ='';
		$this->password ='';
		$this->first_name ='';
		$this->last_name ='';


	}

public function setUsuario ($m_usuario)
{
	$this->usuario=$m_usuario;

}

public function setPassword ($m_password)
{
	$this->password=$m_password;
}


public function setPrimerNombre ($m_primerNombre)
{
	$this->first_name=$m_primerNombre;
}

public function setApellido ($m_apellido)
{
	$this->last_name=$m_apellido;
}

public function getUsuario()
{
	return	$this->usuario;
}

public function getPassword()
{
	return	$this->password;
}

public function getPrimerNombre()
{
	return	$this->first_name;
}

public function getApellido()
{
	return	$this->last_name;
}


public function cargar($usuario, $primerNombre, $apellido, $pass)
{
	$this->setUsuario($usuario);
	$this->setPassword($pass);
	$this->setPrimerNombre($primerNombre);
	$this->setApellido($apellido);

}

public function agregarUsuario(){
	$query = 'INSERT INTO users(user_id, user_pwd, first_name, last_name) VALUES(:user_id, :user_pwd, :first_name, :last_name)';

	try {
		$conexion= new Conexion();
		$conn = $conexion->getInstance();
		$sql = $conn->prepare($query);

		$rows= $sql->execute(array(':user_id'=>$this->getUsuario(), ':user_pwd'=>$this->getPassword(), ':first_name'=>$this->getPrimerNombre(),':last_name'=>$this->getApellido()));

		if ($rows==1) {
			echo "INSERT Correcto";
		}
	} catch (PDOException $e) {
		echo "Error: ".$e->getMessage();
	}

}


}


?>

