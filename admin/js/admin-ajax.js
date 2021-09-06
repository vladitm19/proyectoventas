$(document).ready(function () {
	$('#crear-admin').on('submit', function (e) {
		e.preventDefault();
		
		var datos = $(this).serializeArray();
		
		$.ajax({
			type: $(this).attr('method'),
			url: $(this).attr('action'),
			data: datos,
			dataType: "json",
			success: function (data) {
				var resultado=data;
				if (resultado.respuesta == 'exito') {
					Swal.fire(
						'Correcto!',
						'El administrador se creo correctamente!',
						'success'
					)
				}else{
					Swal.fire(
						'Error!',
						'Hubo un error',
						'error'
					)
				}
			}
		});
	});
	$('#login-admin').on('submit', function (e) {
		e.preventDefault();
		
		var datos = $(this).serializeArray();
		
		$.ajax({
			type: $(this).attr('method'),
			url: $(this).attr('action'),
			data: datos,
			dataType: "json",
			success: function (data) {
				var resultado=data;
				console.log(data);
				if (resultado.respuesta == 'exitoso') {
					Swal.fire(
						'Login Correcto!',
						'Bienvenid@ ' + resultado.usuario + ' !!',
						'success'
					)
					setTimeout(function(){
						window.location.href = 'admin-area.php';
					},1000);
				}else{
					Swal.fire(
						'Error!',
						'Error de autenticación',
						'error'
					)
				}
			}
		});
	});
});