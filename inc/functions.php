<?php
//session_start();
//include '../class/Conexion.php';

class Functions {

public function esUnMailValido($mail)
{

	if (substr_count($mail,'@' ) !=1) 
	{
		return false;	
	}

	$partesMail= explode('@',$mail);

	$cuenta= $partesMail[0];
	$dominio=$partesMail[1];

	if (strlen($cuenta) < CUENTA_MAIL_LONGITUD_MINIMA) 
	{
		return false;
	}

	if (substr_count($dominio,'.' ) ==0) 
	{
		return false;	
	}

	return true;

}

public function checkUser($user)
{
	if (empty($user)) {

		return USER_OBLIGATORIO; // error 1
	}

	if (in_array($user, array('admin','administrador'))) {

		return USER_INVALIDO; //error 2
	}

	return USER_OK; //0
}

public function checkEdad($edad)
{
	if (!is_numeric($edad)) {

		return EDAD_NO_NUMERICA;
	}

	if (substr_count($edad, '.') > 0) {

		return EDAD_DECIMAL;
	}

	settype($edad, 'integer');

	if ($edad < EDAD_MINIMA_ACEPTADA || $edad > EDAD_MAXIMA_ACEPTADA ) {
		return EDAD_FUERA_RANGO;
	}

	return EDAD_OK;
}

public function checkPass($pass1,$pass2)
{
	if ($pass1 != $pass2) {

		return PASSWORDS_DISTINTOS; //1
	}

	if (empty($pass1)) {
		return PASSWORD_VACIO;
	}

	if (strlen($pass1) < LONGITUD_MINIMA_PASSWORD) {
		return PASSWORD_ERROR_LONGITUD;
	}

	if (!elPasswordContieneNumeros($pass1)) {
		
	}
}


public function elPasswordContieneNumeros($password)
{
	for ($i=0; $i < strlen($password) ; $i++) { 
		
		if (is_numeric($password[$i])) {
			return true;
		}
	}

	return false;

} 

public function nroDocValido($numero)
{
	return is_numeric($numero);
}


public function valorInicialForm($campo)
{
	if (!isset($_POST[$campo])) {
		return '';
	}
	else
	{

		return $_POST[$campo];
	}

}


 public function logueo($usuario, $contrasenia){
        //El password obtenido se le aplica el crypt
        //Posteriormente se compara en el query
        $pass_c = crypt($contrasenia, '_er#.lop');
        $query = "SELECT * FROM usuarios WHERE nombre='$usuario' AND password='$pass_c'";
 		

 		$conexion= new Conexion();
		$conn = $conexion->getInstance();
		$sql = $conn->prepare($query);
		var_dump($sql);

        //$result = $this->mysqli->query($q);

		$rows= $sql->execute(array('$usuario'=>$this->getUsuario(), '$contrasenia'=>$this->getPassword()));

        //Si el resultado obtenido no tiene nada
        //Muestra el error y redirige al index

        if( $rows == 0)
        {
            echo'<script type="text/javascript">
                alert("Usuario o Contraseña Incorrecta");
                window.location="httP://localhost/login/index.php"
                </script>';
        }
 
        //En otro caso
        //En $reg se guarda el resultado de la consulta
        //Al segundo posición de SESION se le asigna el id del usuario
        //Redirige a página logueada
        else{
            $reg = mysqli_fetch_assoc($result);
            $_SESSION["session"][] = $reg["id"];
            header("location:principal.php");
        }

	

 
    }

}

?>