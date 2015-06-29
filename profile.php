<?php

    $meses = array(" ", "Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");

?>

<?php include 'templates/header.php';?>

       <!--div id="nav">950x35</div-->
		<div id="contenido">
			<div class="menu">
			<b>Site Navigation</b>
			<br/><br/>
				<a href="">Logout</a> <br/>
				<a href="profile.php" title="">Mi Perfil</a><br />
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

            <div class="formProfile">
                <h4 class="titleForm">titulo</h4>

                <form action="" method="POST">
                    <table>
                        <tr>
                            <th>Username:*</th>
                            <td><input type="text" name="usuario" id="usuario" required="require"/><span>(not shown if you enter a name!)</span></td>
                        </tr>
                        <tr>
                            <th>password:*</th>
                            <td><input type="password" name="password" id="password" required="require"/></td>
                        </tr>
                        <tr>
                            <th>Email:*</th>
                            <td><input type="email" name="email" id="email" required="require"/><span>Please read notes below!<br>(this is what other users see)</span></td>

                        </tr>
                        <tr>
                            <th>Nombre:</th>
                            <td><input type="text" name="nombre" id="nombre" required="require"/></td>
                        </tr>
                        <tr>
                            <th>Apellido:</th>
                            <td><input type="text" name="apellido" id="apellido" required="require"/></td>
                        </tr>
                        <tr>
                            <th>Birthdate:</th>
                            <td>
                                day
                                   <select name="day" id="day">
                                        <option value="0">-</option>
                                        <?php foreach (range(1,31) as $day){?>
                                        <option value="<?php echo $day; ?>"><?php echo $day; ?></option>
                                        <?php
                                            }
                                         ?>
                                   </select>
                               month
                                   <select name="month" id="month">
                                        <option value="0">-</option>
                                        <?php foreach (range(1,12) as $month){ ?>
                                        <option value="<?php echo $month; ?>"><?php echo $meses[$month]; ?></option>
                                        <?php
                                            }
                                         ?>
                                   </select>
                               year
                                   <select name="year" id="year">
                                        <option value="0">-</option>
                                        <?php foreach (range(1916,1997) as $anio){ ?>
                                        <option value="<?php echo $anio; ?>"><?php echo $anio; ?></option>
                                        <?php } ?>
                                   </select>
                            </td>
                        </tr>
                        <tr>
                            <th>Height:</th>
                            <td>
                                feet
                                    <select name="height" id="height">
                                        <option value="0">-</option>
                                        <?php foreach (range(34, 65) as $altura){ ?>
                                        <option value="<?php echo $altura; ?>"><?php echo $altura; ?></option>
                                        <?php } ?>
                                    </select>

                                 or centimeters
                                 <input type="text" name="centimeters" id="centimeters" size="10"/>

                            </td>
                        </tr>
                        <tr>
                        	<th>Weight:</th>
                        	<td>
                        	   pounds:<input type="text" name="pounds" id="pounds" size="10"/> or kg:<input type="text" name="kilograms" id="kilograms" size="10"/>
                        	</td>
                        </tr>
                        <tr>
                        	<th>Preferences</th>
                        	<td>
                        	   <input type="checkbox" name="opcion1" value="opcion1"/>opcion 1
                        	   <input type="checkbox" name="opcion3" value="opcion3"/>opcion 3 <br />
                        	   <input type="checkbox" name="opcion2" value="opcion2"/>opcion 2
                        	   <input type="checkbox" name="opcion4" value="opcion4"/>opcion 4
                        	</td>
                        </tr>
                        <tr>
                        	<th>Partnered?:</th>
                        	<td>
                                <input type="radio" name="yes" value="1"/>yes
                                <input type="radio" name="no" value="0" checked/>no or prefer not to tell
                        	</td>
                        </tr>
                        <tr>
                        	<th>City:</th>
                        	<td><input type="text" name="city" id="city"/></td>
                        </tr>
                        <tr>
                        	<th>Zip/postal:</th>
                        	<td><input type="text" name="zip" id="zip" size="5" /> (Canadian and UK codes not visible to others!)</td>
                        </tr>
                        <tr>
                        	<th>State/province</th>
                        	<td>
                            	   <select name="state" id="state">
                            	       <option value="0">-</option>
                            	   </select>
                        	   -or
                        	       <select name="province" id="province">
                        	           <option value="0">-</option>
                        	       </select>
                        	</td>
                        </tr>
                        <tr>
                        	<th>Country</th>
                        	<td>
                        	   <select name="country" id="country">
                                    <option value="0">Argentina</option>
                        	   </select>
                        	</td>
                        </tr>
                        <tr>
                        	<th class="seek">I seek</th>
                        	<td class="seekCheck">
                        	   <input type="checkbox" name="opcion1" value="opcion1"/> opcion 1 <br />
                        	   <input type="checkbox" name="opcion2" value="opcion2"/> opcion 2 <br />
                        	   <input type="checkbox" name="opcion3" value="opcion3"/> opcion 3 <br />
                        	   <input type="checkbox" name="opcion4" value="opcion4"/> opcion 4 <br />
                        	   <input type="checkbox" name="opcion5" value="opcion5"/> opcion 5
                        	</td>

                        </tr>
                        <tr>
                            <th>Preferencia de edad:</th>
                            <td>
                                    <select name="preferences" id="preferences">
                                        <option value="0">-</option>
                                        <?php foreach (range(21,99) as $desde){ ?>
                                        <option value="<?php echo $desde; ?>"><?php echo $desde; ?></option>
                                        <?php } ?>
                                    </select>

                                to
                                    <select name="preferences" id="preferences">
                                        <option value="0">-</option>
                                        <?php foreach (range(21,99) as $hasta){ ?>
                                        <option value="<?php echo $hasta; ?>"><?php echo $hasta; ?></option>
                                        <?php } ?>
                                    </select>
                            </td>
                        </tr>
                        <tr>
                            <th>Profile text</th>
                            <td><textarea name="profileText" id="profileText" cols="30" rows="5"></textarea></td>
                        </tr>
                        <tr>
                            <th class="imgProfile">Foto de perfil</th>
                            <td>
                                <img src="images/IMG_0404.JPG" alt="" class="imgPos"/>
                                <input type="file" name="imgProfile" id="imgProfile"/> <br />
                                <a href="">Aprieta aqui para remover tu foto de perfil</a> <br />
                                <a href="adminImg.php">Aprieta aqui para administrar tu galeria y fotos privadas</a>

                            </td>
                         </tr>
                         <tr>
                            <th>Video del perfil</th>
                            <td><a href="">Click here to manage your videos</a></td>
                         </tr>
                         <tr>
                            <th>Perfil activo</th>
                            <td><input type="checkbox" name="ProfileActive" id="profileActive" /> (el perfil esta abierto y buscable)</td>
                         </tr>
                         <tr>
                            <th>Notificar si llega un nuevo mensaje</th>
                            <td><input type="checkbox" name="notifier" id="notifier"/> (recibes un email cuando recibes un nuevo mensaje)</td>
                         </tr>
                         <tr>
                            <th>Auto conectar</th>
                            <td><input type="checkbox" name="autoConnect" id="autoConnect"/> (en este computador - no usar en computador compartidos!)</td>
                         </tr>
                         <tr>
                            <td><input type="submit" value="Actualizar" /></td>
                         </tr>

                    </table>
                </form>
			</div>

			<div class="cajaDerecha">250x230</div>





<?php include 'templates/pie.php';?>