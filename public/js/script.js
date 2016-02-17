$("#registro").click(function(e){
	e.preventDefault();
	var dato  = $("#genre").val();
	var route = "http://localhost/cinema/public/index.php/genero";
	var token = $("#token").val();
	
	$.ajax({
		//url: route,
		/*
			Comente url por lo que esta abajo
			Para no tener que estar colocando o adivinando la URL hacemos lo siguiente
			Primero en genero/create.blade.php le coloque un id al formulario llamado formularioGenero
			para que asi con $("#formularioGenero").attr('action') puedas obtener la url 
			$("#formularioGenero") indicamos que  busque en la vista lo que tenga como id formularioGenero
			y cuando lo encuentre busque de ese elemento su attributo llamado action con esto attr('action')
		*/
		url     : $("#formularioGenero").attr('action'),
		type    : $("#formularioGenero").attr('method'),
		headers : {'X-CSRF-TOKEN': token},
		dataType: 'json',
		data    : {genre: dato},

		success:function(){
			$("#msj-success").fadeIn();
		}
	})
});