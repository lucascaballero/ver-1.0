$(document).ready(function(){
	$("#aceptar").on("click", function(){
		if($("#id").val() != ""){
			if($("#pwd").val() != $("#confirmarcontraseña").val()){
				alert("Contraseñas diferentes.");
				return false;
			}else{
				$("#usuarios").attr("action", "modificar.php");
			}
		}else{
			if($("#pwd").val() != $("#confirmarcontraseña").val()){
				alert("Contraseñas diferentes.");
				return false;
			}else{
				$("#usuarios").attr("action", "guardar.php");
			}
		}
	});
	$("#eliminar").on("click", function(){
		if($("#id").val() != ""){
			$.ajax({
				url: 'eliminar.php',
				type: 'post',
				data: {id: $("#id").val()},
				success: function(data){
					alert("Registro eliminado con exito");
					location.href="index.php";
				}
			});
		}else{
			alert("Debe buscar un usuario primero.");
		}
	});
});
