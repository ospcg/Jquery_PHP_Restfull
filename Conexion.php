
<!-- $hostname='innovationtime.co'; 
$username='timeinno_uZ3r'; 
$password='P7!.1ezsh^aG'; 
$dbname='timeinno_postula'; --> 
<?php 
$servidor="innovationtime.co"; 
$usuario="timeinno_uZ3r"; 
$pass="P7!.1ezsh^aG"; 

$Conexion = @mysql_connect($servidor, $usuario, $pass) or die ("No se pudo Conectar la Base de Datos: <b>". mysql_error()."</b>"); 
mysql_select_db("timeinno_postula", $Conexion) or die("Error en la selección de la base de datos: <b>".mysql_error()."</b>"); 

?> 
	

