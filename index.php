<?php session_start();

require "class/Conexion.php";
require "inc/functions.php";

	if (!empty($_POST))
	{
		$consultas = new Functions();
		$user = trim($_POST['usuario']);
		$pass = trim($_POST['contrasenia']);
		$log = $consultas->logueo($user, $pass);
	}

		//header("location:principal.php");
		//exit;
?>


<?php include "templates/header.php"; ?>

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
				<b>Welcome</b></br>
				This site is bhjkshfjsf sjfhsjfsjfsjfs foahfshkfad dpaauhauiada dadaihauaana jcbajbcaibciaa ajabcuacaca
				cbhcbabcba acbaucbabca aochabcabca ackacjkabcjakc lahcjkackjaca yvvcsvcavcbac abcjkabcjaca
				acbajcbajbcajlaaacajcbajkbcbjkbsa oahahahc
			</div>

			<div class="userName"> <b>Login</b>
				<form action="" method='POST'>

					<label for="nombre">Usuario</label>
					<input type="text" name="usuario" id="nombre" size="15" > <br>

					<label for="password">Contraseña</label>
					<input type="password" name="contrasenia" id="password" size="15" > <br>

					<label for="ingresar"> </label>
					<input type="submit" value="Ingresar" id="ingresar" />
				</form>

				<div>
					<a href="#">Olvidó su contraseña?</a> <br>
					<a href="profile_intro.php" title="">No tiene perfil?</a>

				</div>

			</div>


			<div class="cajaDerecha">250x230</div>

<?php include "templates/pie.php"; ?>


