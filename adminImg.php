<?php

	$imagen = array("chinatown",
					"floating-market",
					"hat-laem",
					"kat-arun",
					"khao-san-road"
					 );
?>

<?php include 'templates/header.php';?>

       <!--div id="nav">950x35</div-->
		<div id="contenido">
			<div class="menu">
			<b>Site Navigation</b>
			<br/><br/>
				<a href="">Logout</a> <br/>
				<a href="profile.php" title="">Mi Perfil</a>  <br/>
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

            <div class="adminImg">

                <h4 class="titleForm">Tu galeria del perfil y fotos privadas</h4>
   			    <table>
   			      <tr>
   			      	<th class="position">Fotos de la galeria</th>
   			      	<td colspan="4">estas fotos solo las pueden ver los usuarios colaboradores - esto es para asegurarse que no las vean "ojos indeseados", y por lo tanto puedas mostrar fotos que de otro modo no mostrarias publicamente en internet.</td>
   			      </tr>
   			      <tr>
   			          <th class="position">Fotos privadas</th>
   			          <td colspan="4">estas fotos pueden ser "agregadas" a los mensajes que envias en el sitio - esto te permite enviar fotos "privadas" a usuarios especificos traspasar la privacidad de tu direccion de email.</td>
   			      </tr>
   			      <tr>
   			      	<th>NBI</th>
   			      	<td colspan="4">tu foto principal del perfil es subido directamente desde tu pagina <a href="">"Mi perfil"</a> (seleccione la foto ("examinar") y luego apreto el boton "Actualizar")</td>
   			      </tr>
   			      <tr>
   			          <th class="position" colspan="2">Fotos atualmente en tu galeria:</th>
   			      </tr>
   			      <tr>
   			              <?php

                    	       $cantidad = count($imagen);

                    	       for ($n=0; $n < $cantidad ; $n++) {
                           ?>

   			          <td class="estilo">
   			             <img src="images/<?php echo $imagen[$n];?>.jpg" alt=""/>
                         <?php
		                  echo '<a href="borrarImg.php" class="deleteImage">Borrar</a>';
	                      ?>
   			          </td>
   			              <?php } ?>
   			      </tr>
   			      <tr>
   			          <td colspan="4">No puedes agregar mas fotos a tu galeria</td>
   			      </tr>
   			      <tr>
                      <th class="position" colspan="2">Fotos privadas actuales:</th>
                  </tr>
                  <tr>
                         <?php

                    	   $cantidad = count($imagen);

                    	   for ($n=0; $n < $cantidad ; $n++) {
                          ?>

   			          <td class="estilo">
   			              <img src="images/<?php echo $imagen[$n];?>.jpg" alt=""/>
                         <?php
		                      echo '<a href="borrarImg.php" class="deleteImage">Borrar</a>';
	                      ?>
   			          </td>
   			              <?php } ?>
   	   		      </tr>
   	   		      <tr>
   			          <td colspan="4">No puedes agregar mas fotos a tu galeria...</td>
   			      </tr>
   			    </table>


   			</div>


<?php include 'templates/pie.php';?>