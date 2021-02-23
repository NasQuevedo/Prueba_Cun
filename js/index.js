$(document).ready(function(){
	 $( "#tabs" ).tabs();
	 getData();
});

var data1;

function showForm(value){
	if(value == "circulo"){
		jQuery("#radio").show();
		jQuery("#lado").hide();
		jQuery("#base").hide();
		jQuery("#altura").hide();

	}else if(value == "cuadrado"){
		jQuery("#radio").hide();
		jQuery("#lado").show();
		jQuery("#base").hide();
		jQuery("#altura").hide();

	}else if(value == "triangulo"){
		jQuery("#radio").hide();
		jQuery("#lado").hide();
		jQuery("#base").show();
		jQuery("#altura").show();

	}
}

function showStairs(){
	let length = jQuery("#length").val();
	if(length == "" || length == 0){
		alert("La longitud no puede estar vacia o ser igual a cero");
		return false;
	}

	jQuery.ajax({
		url: "controller/stairs.php",
		type: "GET",
		dataType: "json",
		data:{
			"lenght": length
		},
		success: function(response){
			jQuery("#stair-result").html(response.asc);
			jQuery("#stair-result").append(response.desc);
			jQuery("#stair-result").append(response.numeric);
		}
	});
}

function showCalculate(){
	let type = jQuery("#type").val();
	let radio = jQuery("#radio").val();
	let lado = jQuery("#lado").val();
	let base = jQuery("#base").val();
	let altura = jQuery("#altura").val();
	if(type == ""){
		alert("Debe seleccionar una opcion");
		return false;
	}else{
		switch(type){
			case "circulo":
				if(radio == "" || radio == 0){
					alert("El radio no puede ser vacio o cero");
					return false;
				}
				break;
			case "cuadrado":
				if(lado == "" || lado == 0){
					alert("El lado no puede ser vacio o cero");
					return false;
				}
				break
			case "triangulo":
				if(base == "" || base == 0){
					alert("El base no puede ser vacio o cero");
					return false;
				}else if(altura == "" || altura == 0){
					alert("El altura no puede ser vacio o cero");
					return false;
				}
				break;
		}
	}

	jQuery.ajax({
		url: "controller/calculate.php",
		type: "GET",
		dataType: "json",
		data:{
			"type": type,
			"radio": radio,
			"lado":lado,
			"base": base,
			"altura": altura
		},
		success: function(response){
			jQuery("#calculate-result").html(response.result);
		}
	});
}

function showString(){
	let string = jQuery("#string").val();

	if(string == ""){
		alert("Debe ingresar la cadena de texto");
		return false;
	}

	jQuery.ajax({
		url: "controller/string.php",
		type: "GET",
		dataType: "json",
		data:{
			"string":string
		},
		success: function(response){
			console.log(response);
			jQuery("#string-result").html(response.result);
		}
	});
}

function showRange(){
	let rango = jQuery("#rango").val();

	if(rango == "" || rango == 0){
		alert("El rango no puede ser vacio o cero");
		return false;
	}

	jQuery.ajax({
		url: "controller/range.php",
		type: "GET",
		dataType: "json",
		data:{
			"rango":rango
		},
		success: function(response){
			console.log(response);
			jQuery("#range-result").html(response.result);
		}
	});
}

function showPar(){
	let par = jQuery("#par").val();

	if(par == ""){
		alert("La cadena de parentesis no puede ser vacia");
		return false;
	}

	jQuery.ajax({
		url: "controller/par.php",
		type: "GET",
		dataType: "json",
		data:{
			"par":par
		},
		success: function(response){
			console.log(response);
			jQuery("#par-result").html(response.result);
		}
	});
}

function getData(){
  jQuery.getJSON("ejemplo.json", function(data){
  	data1 = data;
    for(var i=0; i<data.length; i++){
         drawItem(data[i]);
    }
  });
}

function drawItem(data){
	jQuery("#workers-result").append("id: "+data.id+"<br>");
	jQuery("#workers-result").append("name: "+data.name+"<br>");
	jQuery("#workers-result").append("email: "+data.email+"<br>");
	jQuery("#workers-result").append("position: "+data.position+"<br>");
	jQuery("#workers-result").append("salary: "+data.salary+"<br>");

}

function searchByEmail(){
	let email = jQuery("#email").val();
	if(email == ""){
		alert("El email no puede ser vacio");
		return false;
	}
	for(var i=0; i<data1.length; i++){
         if(data1[i].email == email){
         	drawResult(data1[i]);
         }
    }
}

function drawResult(data){
	jQuery("#workers-result").html("id: "+data.id+"<br>");
	jQuery("#workers-result").append("name: "+data.name+"<br>");
	jQuery("#workers-result").append("email: "+data.email+"<br>");
	jQuery("#workers-result").append("phone: "+data.phone+"<br>");
	jQuery("#workers-result").append("position: "+data.position+"<br>");
	jQuery("#workers-result").append("salary: "+data.salary+"<br>");
	jQuery("#workers-result").append("skills: "+data.skills+"<br>");
}