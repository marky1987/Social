
	<?php


	require_once 'class/Usuario.php';
/*
	$objDataBase= new Conexion();
	$conn = $objDataBase->dbConnect();
	$sql = $conn->prepare('SELECT * FROM users');
	$sql->execute();

	
	$rows= $sql->fetchAll();

	foreach ($rows as $row => $campo) {
		echo 'id_usuario: '.$campo[user_id].'<br/>';
		echo 'password: '.$campo[user_pwd].'<br/>';
		echo 'first_name: '.$campo[first_name].'<br/>';
		echo 'last_name: '.$campo[last_name].'<br/>';


	}
	*/

/*$conn = new Usuario();
$comando = $conn->cargar('miUsername','miPrimerNombre','miApellido','miPass');

$comando = $conn->agregarUsuario();
*/

$db = new Conexion();
$comando= $db->getInstance();

$sql = $comando->prepare('SELECT * FROM users');
	$sql->execute();


$rows= $sql->fetchAll();

	foreach ($rows as $row => $campo) {
		echo 'id_usuario: '.$campo['user_id'].'<br/>';
		echo 'password: '.$campo['user_pwd'].'<br/>';
		echo 'first_name: '.$campo['first_name'].'<br/>';
		echo 'last_name: '.$campo['last_name'].'<br/>';

	}


?>



