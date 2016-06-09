<?php
	require("Conexion.php");
	$id= $_POST['id'];

	$consulta2 = "SELECT * FROM comunas WHERE Region_Id = '$id' ORDER BY Id ASC";
	$result = mysql_query($consulta2);
	while($fila = mysql_fetch_array($result)){
		echo "<option value = '".$fila['id']."'>".$fila['nombre']."<option>";
	}
?>


