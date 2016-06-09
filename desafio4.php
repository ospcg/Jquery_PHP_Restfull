<?php
include("Conexion.php");
$consulta = "SELECT * FROM regiones ORDER BY Id ASC";
//Rescatamos la id region del select para la consulta
$id = $_POST['id'];
$consulta2 = "SELECT * FROM comunas WHERE Region_Id = '$id' ORDER BY Id ASC";
$result = mysql_query($consulta);
$result2 = mysql_query($consulta2);
	while($fila2 = mysql_fetch_row($result2)){
		echo "<option value = '".$fila2['0']."'>".$fila2['1']."<option>";
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<script src="jquery-1.12.3.min.js"></script>
		<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	
	<script type="text/javascript">
		$(function(){
			$(#regiones).on('change', function(){
				var id = $(#regiones).val();
				var url_destino = 'desafio4.php';
				$.ajax({
					type: 'POST',
					url: 'url_destino',
					data: 'id='+id,
					success: funtion(data){
						$('#comunas').remove();
						$('#comunas').append(data);
					}

				});
				return false;
			});
		}

	</script>

	<title>Desafio 4</title>
</head>
<body>
<div class="col-md-4 col-md-offset-4">
	<h1>Postula a una pega bakan</h1>
	<select id="regiones">
		<option value="">Seleccionar Región</option>
		<?php
		while($fila = mysql_fetch_row($result)){
			echo "<option value = '".$fila['0']."'>".$fila['1']."<option>";
		}
		?>
	</select>
	<br>
	<select id="comunas">
		<option value="">Seleccionar Comuna</option>
	</select>
</div>
	
</body>
</html>