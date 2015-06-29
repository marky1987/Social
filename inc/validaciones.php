<?php 

require_once 'classes/Usuario.php';


				$_POST = array_map('trim', $_POST); //quita los espacios en blanco a todo el array que paso por POST

				$user = $_POST['user'];
				$nombre = $_POST['nombre'];
				$apellido = $_POST['apellido'];
				/*$mail = $_POST['mail'];
				$edad = $_POST['edad'];
				$numerodoc = $_POST['numerodoc'];*/
				$pass1 = $_POST['pass1'];
				/*$pass2 = $_POST['pass2'];*/
				/*$genero = @ $_POST['genero'];*/
				

				$errores='';

				switch (checkUser($user)) {
					case USER_OBLIGATORIO:
					$errores = 'El user es obligatorio. Verifique'.BRKLINE;
					break;

					case USER_INVALIDO:
					$errores = 'El user ingresado no esta permitido. Intente con otro usuario'.BRKLINE;
					break;

				}

				if (empty($nombre) || empty($apellido)) {
					$errores .= 'Su nombre y apellido son obligatorios. Verifique'.BRKLINE;
				}

				/*if (!esUnMailValido($mail)) {
					$errores .= 'Su email no tiene un formato valido. Verifique'.BRKLINE;
				}*/

				if(!empty($edad)) // la edad solo la validamos si la completó... (es opcional)
				{	
					switch(checkEdad($edad))
					{
						case EDAD_NO_NUMERICA:
						$errores .=  'La edad no es numerica'.BRKLINE;
						break;	

						case EDAD_DECIMAL:
						$errores .= 'La edad no puede tener decimales'.BRKLINE;
						break;	

						case EDAD_FUERA_RANGO:
						$errores .=  'La edad debe ser entre '.EDAD_MINIMA_ACEPTADA.' y '.EDAD_MAXIMA_ACEPTADA.BRKLINE;
						break;
					}
				}

				/*switch(checkPass($pass1,$pass2))
				{
					case PASSWORDS_DISTINTOS:
					$errores .= 'Los passwords no coinciden'.BRKLINE;
					break;

					case PASSWORD_VACIO:
					$errores .= 'El password ES OBLIGATORIO'.BRKLINE;
					break;

					case PASSWORD_ERROR_LONGITUD:
					$errores .= 'El password debe tener entre '.LONGITUD_MINIMA_PASSWORD.' y '.LONGITUD_MAXIMA_PASSWORD.' caracteres'.BRKLINE;
					break;
					
					case PASSWORD_SIN_NUMEROS:
					$errores .= 'El password debe contener al menos 1 número'.BRKLINE;
					break;	

				}*/

				/*if (!empty($nrodoc)) {
					if (!nroDocValido($nrodoc)) 
					{
						$errores .= 'Numero de DOC no valido. Debe ser numérico'.BRKLINE;
					}
				}*/

				/*if (empty($genero)) {
					$errores .= 'El genero es un dato obligatorio. Verifique'.BRKLINE;
				}*/


				if (!$errores) {
					echo '<p id="mensaje_ok">Datos correctos </p>';
					$conn = new Usuario();
					$comando = $conn->cargar($user,$nombre,$apellido,$pass1);					
					$comando = $conn->agregarUsuario();
				}
				else{
					echo '<p id="mensaje_error">'.$errores.'</p>';	
				}


?>
