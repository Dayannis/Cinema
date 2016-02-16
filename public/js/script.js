$("#registro").click(function(){
	var dato  = $("#genre").val();
	var route = "http://localhost/cinema/public/index.php/genero";
	var token = $("#token").val();
	
	$.ajax({
	url: route,
	headers: {'X-CSRF-TOKEN': token},
	type: 'POST',
	dataType:'json',
	data:{genre: dato}	

	success:funtion(){
	$("#msj-success").fadeIn();
	}
	});
});