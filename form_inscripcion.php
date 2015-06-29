
<form action="" method="post" enctype="multipart/form-data" name="inscripcion">

<table align="center" width="800" cellpadding="0" cellspacing="3" class="formulario">

    <tr>

        <td width="153">Usuario: </td>
        <td width="250">

            <input type="text" name="user" size="20" maxlength="20" class="cajatexto" value="" />

        </td>
        <td width="175"></td>
        <td width="205"></td>

    </tr>

     <tr>

        <td>Password:</td>
        <td><input type="password" name="pass1" size="12" maxlength="12" class="cajatexto" value="" /></td>
        <!--td>Confirme password:</td-->
        <!--td><input type="password" name="pass2" size="12" maxlength="12" class="cajatexto" value="<?php/* echo valorInicialForm('pass2'); */?>" /></td-->

	</tr>

     <tr>
        <td colspan="4">&nbsp;</td>
	</tr>

    <tr>

        <td>Nombre:</td>
        <td><input type="text" name="nombre" size="20" class="cajatexto" value="<?/*php echo valorInicialForm('nombre'); */?>"  /></td>
         <td>Apellido:</td>
        <td><input type="text" name="apellido" size="20" class="cajatexto" value="<?/*php echo valorInicialForm('apellido'); */?>" /></td>

	</tr>
  <tr>
    <td></td>

  </tr>

    <tr>
		<td>


    </td>
    <td colspan="4"><input type="submit" value="Enviar datos" class="boton" /></td>
  	</tr>


</table>
</form>