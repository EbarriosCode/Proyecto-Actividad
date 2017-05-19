
// funcion para validar que solo ingresen numeros en el telefono
function validateInput(e)
{
    key = e.keyCode || e.which;
    teclado = String.fromCharCode(key);
    caracteres = "0123456789";
    especiales = "8-37-38-46-164";
    teclado_especial = false;
        for(var i in especiales)
        {
            if(key==especiales[i])
            {
                teclado_especial = true;
                break;
            }
        }
        if(caracteres.indexOf(teclado) == -1 && !teclado_especial)
        {
            return false;
        }

}
 
// funcion para validar que no ingresen comillas ni caracteres especiales
function validateInputCharacter(e)
{
    key = e.keyCode || e.which;
    teclado = String.fromCharCode(key);
    caracteres = "abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZ´áéíóúÁÉÍÓÚ ";
    especiales = "8-37-38-32-46-164";
    teclado_especial = false;
        for(var i in especiales)
        {
            if(key==especiales[i])
            {
                teclado_especial = true;
                break;
            }
        }
        if(caracteres.indexOf(teclado) == -1 && !teclado_especial)
        {
            return false;
        }

}

// funcion para validar que no ingresen comillas ni caracteres especiales
function validateInputEmail(e)
{
    key = e.keyCode || e.which;
    teclado = String.fromCharCode(key);
    caracteres = "abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZ´áéíóúÁÉÍÓÚ0123456789.@";
    especiales = "8-37-38-46-164";
    teclado_especial = false;
        for(var i in especiales)
        {
            if(key==especiales[i])
            {
                teclado_especial = true;
                break;
            }
        }
        if(caracteres.indexOf(teclado) == -1 && !teclado_especial)
        {
            return false;
        }

}


 // Funcion para validar el email con expresión regular
 function validateEmail(sEmail) {
     var ExRegular = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
     if (ExRegular.test(sEmail)) {
         return true;
     }else {
         return false;
     }
 }


 $(document).ready(function(){ 

 /*
        //validacion nombres
        $("#imgNombre").css('margin-top','30px');
        $("#imgApellido").css('margin-top','30px');
        $("#imgCorreo").css('margin-top','30px');
        $("#imgTelefono").css('margin-top','30px');
        $("#imgEstablecimiento").css('margin-top','30px');

        $("#nombres").blur(function (){   

            if($("#nombres").val() == '' || $("#nombres").val().length <= 4)
            {
                console.log("El campo esta vacio o tiene 4 o menos caracteres");
                $("#imgNombre").attr("src","Views/images/fail.png");
                // bloquear boton de registro
                //$("#btn-registrar").hover(function(){
                    $("#btn-registrar").attr('disabled',true);
                    $("#btn-registrar").css("cursor","not-allowed");
                    
                //});                
            }
            else
            {
                $("#imgNombre").attr("src","Views/images/check.png");
                // desbloquear boton de registro
                //$("#btn-registrar").hover(function(){
                $("#btn-registrar").attr('disabled',false);
                $("#btn-registrar").css("cursor","default");
                
                //}); 
            }
        });

        //validacion apellidos
        $("#apellidos").blur(function (){

            if($("#apellidos").val() == '' || $("#apellidos").val().length <= 4)
            {
                console.log("El campo esta vacio o tiene 4 o menos caracteres");
                $("#imgApellido").attr("src","Views/images/fail.png");
                // bloquear boton de registro
                 $("#btn-registrar").attr('disabled',true);
                $("#btn-registrar").css("cursor","not-allowed");
               
               
            }
            else
            {
                $("#imgApellido").attr("src","Views/images/check.png");
               // desbloquear boton de registro
                $("#btn-registrar").attr('disabled',false);
                $("#btn-registrar").css("cursor","default");                
            }
        });

        //validacion telefono
        $("#telefono").blur(function (){
            if($("#telefono").val() == '' || $("#telefono").val().length <= 7) //|| $("#telefono").val().length > 7)
            {
                console.log("El campo esta vacio o tiene 6 o menos caracteres");
                $("#imgTelefono").attr("src","Views/images/fail.png");
                
                $("#btn-registrar").attr('disabled',true);
                $("#btn-registrar").css("cursor","not-allowed");
            }
            else
            {
                $("#imgTelefono").attr("src","Views/images/check.png");

                $("#btn-registrar").attr('disabled',false);
                $("#btn-registrar").css("cursor","default");  
            }
        });


        // validacion correo
        $("#correo").blur(function (){
            //alert($("#correo").val());
            if(validateEmail($("#correo").val())){
                console.log("Correo Valido :)");
                $("#imgCorreo").attr("src","Views/images/check.png");
                
                $("#btn-registrar").attr('disabled',false);
                $("#btn-registrar").css("cursor","default");  
            }
                
            else{
                console.log("Correo Invalido :(");
                $("#imgCorreo").attr("src","Views/images/fail.png");

                $("#btn-registrar").attr('disabled',true);
                $("#btn-registrar").css("cursor","not-allowed");                
            }
                
        });

        // validación Establecimiento
        $("#establecimiento").blur(function (){
            if($("#establecimiento").val() == '' || $("#establecimiento").val().length <= 4)
            {
                console.log("El campo esta vacio o tiene 6 o menos caracteres");
                $("#imgEstablecimiento").attr("src","Views/images/fail.png");

                $("#btn-registrar").attr('disabled',true);
                $("#btn-registrar").css("cursor","not-allowed");
            }
            else
            {
                $("#imgEstablecimiento").attr("src","Views/images/check.png");

                $("#btn-registrar").attr('disabled',false);
                $("#btn-registrar").css("cursor","default");  
            }
        });  */
    });