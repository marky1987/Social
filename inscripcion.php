
<?php require 'inc/const.php'; ?>
<?php require 'inc/functions.php';?>



<html>

<head>
	<title>Inscripci&oacute;n</title>
	<link href="css/estilos.css" rel="stylesheet" type="text/css" />
</head>

<body>

<?php /*@ include 'inc/encabezado.html'; */?>

<table align="center" width="1000" bgcolor="white" cellpadding="0" cellspacing="0" class="cuerpo">

  	<tr>
		<td align="center" class="celdatitulo">
        
        	<h1>Formulario de registraci&oacute;n:</h1>        
        
		</td>
	</tr>
	
	<tr height="500" align="center" valign="top">
		
		<td>
        
        	<!-- aqui el contenido de inscripcion.php -->
        	<?php 
        		if (!empty($_POST)) {
        			require 'inc/validaciones.php'; 
        		}
        	?>
				
			<?php require 'form_inscripcion.php'; ?>
		
        </td>
	</tr>

</table>

<?php /*@ include 'inc/pie.html'; */?>

</body>
</html>