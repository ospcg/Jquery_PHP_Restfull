<?php
	require("Conexion.php");

	//hacemos el insert
	$nombre= $_POST['nombre'];
	$mail= $_POST['mail'];
	$area= $_POST['area'];
	//$fecha = date('y-m-d');

	//$res = mysql_query("INSERT INTO postulaciones VALUES('".$mail."','".$nombre."','".$area."',NOW()");
	if($nombre == "" || empty($mail) || empty($area)){
		echo "Inserte todos los Campos";
	}else{
	$res = mysql_query("INSERT INTO postulaciones(email,nombre,descripcion,fecha_postulacion) VALUES('$mail','$nombre','$area',NOW())");
	if($res == 0){
	 echo 'Error al insertar el registro.';
	 }else{
	 echo 'Registro exitoso';
	 }
	}
?>