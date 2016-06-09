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