<?php

    $meses = array(" ", "Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");

?>

<?php include "templates/header.php"; ?>
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

    <div class="formRegistro">
        <h4 class="titleForm">Formulario de registro</h4>
        <p>Only a username, password and email is required, but the more detailed<br>
         your profile is, the more likely it is for someone to find and contact you!<br>
         - <a href="">read advice here</a></p>
        <form action="altaUsuario.php" method="POST" enctype="multipart/form-data">
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
                    <th>Profile picture:</th>
                    <td><input type="file" /></td>
                </tr>
                <tr>
                	<th>Profile active</th>
                	<td><input type="checkbox" name="profileActive" id="profileActive"/> (the profile is open and searchable)</td>
                </tr>
                <tr>
                    <th>Notify when new message</th>
                    <td><input type="checkbox" name="notifications" id="notifications"/> (receive an email when you receive a new message)</td>
                </tr>
                <tr>
                    <th>Auto login</th>
                    <td><input type="checkbox" name="autoLogin" id="autoLogin"/> (on this computer - don't use on shared computers!)</td>
                </tr>
                <tr>
                    <td><input type="submit" value="Crear"/></td>
                </tr>
            </table>
            <p>If you don't wish to be contacted/listed on the site just uncheck the checkbox 'Profile active' - and you'll still have the possibility of searching and contacting others.</p>
            <p>Please note, that you must supply an email address you have access to, as profile activation is sent to the specified email address.</p>
            <p>More about <a href="">personal data here...</a></p>

        </form>
    </div>


    <div class="cajaDerecha">250x230</div>

<?php include "templates/pie.php"; ?>