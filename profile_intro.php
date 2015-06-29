<?php
session_start();
//esta variable contiene el resultado de la comparacion
	$resultado ='';
	
	//si se ingreso un codigo...
	if(isset($_POST['codigo'])):
		//y este es igual a la variable de sesion con el valor correcto 
		if($_POST['codigo'] == $_SESSION['captcha']):
			//muestro un mensaje de exito
			$resultado = "Valido!!";
			header("Location: inscripcion-B.php");
		else:
			$resultado = "Invalido!!";
		endif; 
	endif;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Clase 3</title>
	<link rel="stylesheet" type="text/css" href="estilos1.css">
</head>
<body>

	<div id="contenedor">
		<div id="header">Header</div>
		<div class="caja-logo">
		</div>

		<!--div id="nav">950x35</div-->
		<div id="contenido">
			<div class="menu">
			<b>Site Navigation</b>
			<br/><br/>
				Login <br/>
				<a href="profile_intro.php" title="">New Profile / Join</a>  <br/>
				Search Profiles <br/>
				Galleries<br/>
				Galleries 2<br/>
				
				Marketplace / videos<br/>
				News / history<br/>
				Links and resources<br/>
				Contribute!<br/>
				Terms of use<br/>
				About this site<br/><br/>
				Email webmaster / help<br/>
			</div>

			<div class="textoBienvenida">
				<b>Creación de Perfil</b></br>
				<p>This site is bhjkshfjsf sjfhsjfsjfsjfs foahfshkfad dpaauhauiada dadaihauaana jcbajbcaibciaa ajabcuacaca
				cbhcbabcba acbaucbabca aochabcabca ackacjkabcjakc lahcjkackjaca yvvcsvcavcbac abcjkabcjaca
				acbajcbajbcajlaaacajcbajkbcbjkbsa oahahahc</p>
				
				<div>
				<!-- Embebo el captcha con un include, que llama al index del captcha -->

<p>Ingrese el código para verificar que es un humano</p>

		<form action="" method='POST'>
			<table>
				<tr>
					<td><input type="text" name="codigo" required></td>
					<!-- notese que la fuente de la imagen se crea en captcha.php -->
					<td><img src="captcha.php"/></td>
				</tr>
				<tr><td colspan="2"><input type="submit" value="Estoy de acuerdo y deseo crear un perfil"></td></tr>
				<!-- se muestra si los datos ingresados fueron correctos -->
				<tr><td colspan="2" id="resultado"><?php echo '<b>'.$resultado.'</b>'; ?></td></tr>
			</table>
		</form>
				
				</div>

			</div>
			


			<div class="cajaDerecha">250x230</div>


		</div>
		<div id="footer"></div>	
	</div>
</body>
</html>







