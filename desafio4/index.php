<?php
require("Conexion.php");
$consulta = "SELECT * FROM regiones ORDER BY Id ASC";
$result = mysql_query($consulta);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500' rel='stylesheet' type='text/css'>
	<script src="../jquery-1.12.3.min.js"></script>
	<script src="ajax.js"></script>
		<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

		<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/css/bootstrap-select.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/js/bootstrap-select.min.js"></script>

	
	

	<title>Desafio 4</title>
</head>
<body><br>
<div class="col-md-4 col-md-offset-4" align="center">
	<h1 align="center">Postula a una pega bakan</h1>

	<select class="form-control" id="regiones">
		<option value="">Seleccionar Region</option>
		<?php
		while($fila = mysql_fetch_array($result)){
			echo "<option value = '".$fila['id']."'>".$fila['nombre']."<option>";
		}
		?>
	</select>
	<br><br>
	<select class="form-control" id="comunas" onchange='validate();'>
	<option value="" >Seleccionar Comuna</option>	
	</select>
	
	<div class="mensaje"></div>
</div>

<div class="container" style="display:none" id="pro">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h5 class="text-left login-title">Ingresa tus datos y cuéntanos por qué debemos elegirte.</h5>
            <div class="account-wall">
                <form class="form-signin">
                <input type="text" id="nombre" class="form-control" placeholder="Nombre" required autofocus><br>
                <input type="text" id="mail" class="form-control" placeholder="Email" required><br>
                <textarea class="form-control" id="area" rows="9" placeholder="Descripción..." required></textarea><br>
                <button id="btn" class="btn btn-lg btn-primary btn-block" type="submit">
                    Enviar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
	function validate()
	{
	 var ddl = document.getElementById("comunas");
	 var selectedValue = ddl.options[ddl.selectedIndex].value;
	    if (selectedValue == 37)
	   {
	    //alert("Please select a card type");
	    $('.mensaje').html("<h1>Bakan hay pega</h1>");
	    $('#pro').show();
	   }else{
	   	$('.mensaje').html("<h1>Ups...no hay nada</h1>");
	   	$('#pro').hide();
	   }
	}
	
	$('#regiones').selectpicker({
	  style: 'btn-info',
	  size: 10
	});
	
</script>
	
</body>
</html>