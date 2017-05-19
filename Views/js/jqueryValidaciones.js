$(document).ready(function(){
	$.validator.setDefaults({
		errorClass: 'form_error',
		errorElement: 'div'

	});
	
	$("#form-registro").validate({
		rules:
		{
			nombres: {
				required: true,
				minlength: 5
			},
			apellidos: {
				required: true,
				minlength: 5
			},
			correo: {
				required: true,
				email: true
			},
			telefono: {
				required: true,
				number: true,
				minlength: 8,
				maxlength: 8
			},
			establecimiento: {
				required: true,
				minlength: 5
			} 
		},

		messages:
		{
			nombres: {
				required: "El campo Nombre es requerido",
				minlength: $.validator.format("Debe ingresar mínimo {0} caracteres")
			},
			apellidos: {
				required: "El campo Apellido es requerido",
				minlength: $.validator.format("Debe ingresar mínimo {0} caracteres")
			},
			correo: {
				required: "El campo Correo Electrónico es requerido",				
				email: "Ingrese un correo valido"
			},
			telefono: {
				required: "El campo Teléfono es requerido",
				number: "Ingrese un teléfono valido",
				minlength: $.validator.format("Debe ingresar mínimo {0} caracteres"),
				maxlength: $.validator.format("Debe ingresar máximo {0} caracteres")
			},
			establecimiento: {
				required: "El campo Establecimiento es requerido",
				minlength: $.validator.format("Debe ingresar mínimo {0} caracteres")
			} 

		},

		succes: function(element)
		{
			element.remove();
		}
	});

});