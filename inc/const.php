<?php

	// Varias:
	
	define('BRKLINE',"<br />\n");
	define('ZONAHORARIA','America/Buenos_Aires');
	
	// Archivos TXT:
	
	define('VISITAS','visitas.txt');
	define('COMENTARIOS','comentarios.txt');
	
	// DataBase:
	
	define('SERVER','localhost');
	define('USER','root');
	define('PASSWORD','');
	define('LABASE','phpcesar');
	
	// Validaciones:
	
	define('USER_OBLIGATORIO',1);
	define('USER_INVALIDO',2);
	define('USER_REGISTRADO',3);
	define('USER_OK',0);
	
	define('CUENTA_MAIL_LONGITUD_MINIMA',3);
	
	define('EDAD_NO_NUMERICA',1);
	define('EDAD_DECIMAL',2);
	define('EDAD_FUERA_RANGO',3);
	define('EDAD_OK',0);
	define('EDAD_MINIMA_ACEPTADA',18);
	define('EDAD_MAXIMA_ACEPTADA',100);
	
	define('PASSWORDS_DISTINTOS',1);
	define('PASSWORD_VACIO',2);
	define('PASSWORD_ERROR_LONGITUD',3);
	define('PASSWORD_SIN_NUMEROS',4);
	define('PASSWORD_OK',0);
	define('LONGITUD_MINIMA_PASSWORD',6);
	define('LONGITUD_MAXIMA_PASSWORD',12);
		
	define('FOTO_ERROR_UPLOAD',1);
	define('FOTO_ERROR_FORMATO',2);
	define('FOTO_PESADA',3);
	define('FOTO_OK',0);
	define('PESO_MAXIMO_FOTO', 120000);
	define('NO_SUBE_FOTO',4);
	
	// Errores MySQL:
	
	define('ERROR_CONEXION','Error al conectar con MySQL');
	define('ERROR_QUERY','Error al ejecutar la consulta');
	
	// Paginacion:
	
	define('PRODUCTOS_POR_PAGINA',10);
	define('PRIMER_PAGINA_PRODUCTOS',1);
	
	// Cookies:
	
	define('CADUCACION_COOKIE',time() + 60*60*24*7);