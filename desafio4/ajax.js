
	$(function(){
		$('#regiones').on('change', function(){
			var id = $('#regiones').val();
			var url_destino = 'metodos.php';
			$.ajax({
				type:'POST',
				url:url_destino,
				data:'id='+id,
				success: function(data){
					$('#comunas option').remove();
					$('#comunas').append(data);
				}

			});
			return false;
		});
	});

	$(function(){
		$('#btn').click(function(){
			var nombre = $('#nombre').val();
			var mail = $('#mail').val();
			var area = $('#area').val();
			var url_destino = 'insertar.php';
			$.ajax({
				type:'POST',
				url:url_destino,
				data:{nombre:nombre,mail:mail,area:area},
				success: function(data){
					alert(data);
					location.reload();
				}

			});
			return false;
		});
	});

	


