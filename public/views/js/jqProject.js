/*--------------------------------------
		DECLARACION DE VARIABLES
-----------------------------------------*/
var ejecutar=true;
var verifyOne = /^[a-zA-Z ñáéíóú]*$/;
var verifyTwo = /^\d*$/;
var verifyThree = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;
var verifyFore = /^[a-zA-Z0-9_-]+$/;
var firstName;
var lastName;
var email;
var phone;


/*--------------------------------------
			LIMPIADO DE TEXT
-----------------------------------------*/
function limpiarInput(){
	firstName=$("#name").val().trim();
	lastName=$("#lastname").val().trim();
	email=$("#email").val().trim();
	phone=$("#phone").val().trim();

	$("#name").val(firstName);
	$("#lastname").val(lastName);
	$("#email").val(email);
	$("#phone").val(phone);
}

/*--------------------------------------
				Reset Clases
-----------------------------------------*/

function resetClass(){

	$('.help-block').fadeOut(1);
	$('.help-block').removeClass('bounceOutLeft');
}

/*--------------------------------------
					Funcion Validar
-----------------------------------------*/

function fnvalidacion(){
		ejecutar=true;
		limpiarInput();
		resetClass();

		if (firstName==""){
			$("#helpname").text("Ingrese sus nombres");
			$('#helpname').fadeIn();
			ejecutar=false;
		} else if (!verifyOne.test(firstName)){
			$("#helpname").text("Ingrese solo letras");
			$('#helpname').fadeIn();
			ejecutar=false;
		}

		if (lastName==""){
			$("#helplast").text("Ingrese sus apellidos");
			$('#helplast').fadeIn();
			ejecutar=false;
		} else if (!verifyOne.test(lastName)){
			$("#helplast").text("Ingrese solo letras");
			$('#helplast').fadeIn();
			ejecutar=false;
		}

		if (email==""){
			$("#helpemail").text("Ingrese su correo electronico");
			$('#helpemail').fadeIn();
			ejecutar=false;
		} else if (!verifyThree.test(email)){
			$("#helpemail").text("Correo Electronico invalido");
			$('#helpemail').fadeIn();
			ejecutar=false;
		}

		if (phone==""){
			$("#helpphone").text("Ingrese su telefono");
			$('#helpphone').fadeIn();
			ejecutar=false;
		} else if (!verifyTwo.test(phone)){
			$("#helpphone").text("Ingrese solo numeros");
			$('#helpphone').fadeIn();
			ejecutar=false;
		} else if (phone.length != 8)
		{
			$("#helpphone").text("Ingrese un numero con 8 digitos");
			$('#helpphone').fadeIn();
			ejecutar=false;
		}

		if(ejecutar)
		{
			document.sentMessage.submit();
			$("#buttone").attr('disabled','disabled');
		}

}

/*--------------------------------------
			Cargar Registrados
-----------------------------------------*/

/*function fullRegisters()
{
	$.ajax({
		url: 'functions/call.Functions.Register.php',
		dataType: "json",
		success: function(data){
			$('#registered tbody').html('');
			var i = 1;
			$.each(data,function(index){
				var firstData = data[index];
				$("#registered tbody").append('<tr>');
				$.each(firstData,function(_index){
					if (_index == 'firstName') {
						$("#registered tbody").append('<td>'+i+'</td>');
						i++;
					}
					$("#registered tbody").append('<td>'+firstData[_index]+'</td>');
				});
				$("#registered tbody").append('</tr>');
			});
		}
	});
}*/

$(document).ready(function(){

	$("#buttone").on("click",function(){
		fnvalidacion();
	});

	$('input').on('focus',function(){
		var id = jQuery(this).attr("id");
		$('#' +  id + ' ~ p').fadeOut().addClass('bounceOutLeft');
	});

	$('select').on('focus',function(){
		var id = jQuery(this).attr("id");
		$('#' +  id + ' ~ p').fadeOut().addClass('bounceOutLeft');
	});

	/*$(document).load(fullRegisters());*/
});
