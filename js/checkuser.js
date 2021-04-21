function check(){
	item = document.getElementById('item').value;
	console.log(item);
	checkitem(item);
}

function checkitem(item) {
	$("#preloader").show(); //mostrem el gif de preloader
	return $.ajax({ //ajax
		url: "checkuser.php", //l'arxiu php que valida
		data: {item:item}, //el nom de l'item
		type: "POST", //tipus d'enviament (POST)

		success: function(resposta){ //si es correcte la resposta de checkitem.php
			if (resposta == "disponible"){ //si checkitem.php diu: disponible
				$("#missatge").html("<span class='disponible'>item disponible</span>"); //mostrem missatge
				$("#enviar").html("<input type='submit'>"); //mostrem input d'enviament
				$("#preloader").hide(); //amaguem el preloader
			}else{ //so e checkitem.php diu: no disponible
				$("#missatge").html("<span class='no-disponible'>item no disponible</span>"); //mostrem missatge
				$("#enviar").html(""); //eliminem botó d'enviament
				$("#preloader").hide(); //amaguem el preloader
			}
		},
		error:function (){
		}
	});
}

