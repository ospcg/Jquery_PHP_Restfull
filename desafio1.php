<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Api Rest</title>
<script src="jquery-1.12.3.min.js"></script>
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>  

<script type="text/javascript">
	$(document).ready(function ()
	{
		$('#btn').click(function()
		{
			$.ajax({
				type: "POST",
				contentType: "application/json; charset=utf-8",
				dataType: "json",
				url: 'https://servicio.com/api/user/login',
				data: JSON.stringify({ username: $('#username').val(), password: $('#password').val() }),
				success: function (data){
					$('.notification').html("<p>" + data + "</p>");
					alert("data");
					console.log("data.d");
				},
				error: function (){
					alert("error");
				}
			});
			return false;
		});

	});
</script>

</head>
<body>
	
<form name="login" id="login">
	<div class="form-group">
		<input type="text" name="username" id="username" />
	</div>
	<div class="form-group">
		<input type="password" name="password" id="password" />
	<div>
		<input type="submit" value="Enviar" id="btn" />
</form>

<div class="notification"></div>




</body>
</html>