<?php if(isset($_GET['registrado'])){
        $registrado = $_GET['registrado']; 
        //print_r($registrado); 
      }
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <meta name="theme-color" content="#2196F3">
    <link rel="shortcut icon" href="Views/images/iconoUmg.jpg" type="image/x-icon"/>
    <title>UMG</title>

    <!-- CSS  -->
    <link href="Views/min/plugin-min.css" type="text/css" rel="stylesheet">
    <link href="Views/min/custom-min.css" type="text/css" rel="stylesheet" >
  	<link rel="stylesheet" type="text/css" href="Views/css/materialize.min.css">
  	<link rel="stylesheet" href="Views/css/estilos.css">
  	<link rel="stylesheet" href="Views/css/style.css">
  	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        .not-allowed{cursor:not-allowed;}
        
        #alerta-roja{display: none;}
        #alerta-verde{display: none;}
         <?php if($registrado == 'false'){?>
                    #alerta-roja{display: inherit;}
        
         <?php }else {?>
                    #alerta-verde{display: inherit;}
         <?php } ?>
    </style>
</head>
<body id="top" class="scrollspy">

<!-- Pre Loader -->
<div id="loader-wrapper">
    <div id="loader"></div>
 
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
 
</div>

<!--Navigation-->
 <div class="navbar-fixed">
    <nav id="nav_f" class="default_color" role="navigation">
        <div class="container">
            <div class="nav-wrapper">
            <a href="#" id="logo-container" class="brand-logo">UMG Reu</a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="#modalRegistro" class="modal-trigger">Únete</a></li>
                    <li><a href="#modalLogin" class="modal-trigger">Login</a></li>                  
                </ul>
                <ul id="nav-mobile" class="side-nav">
                    <li><a href="#modalRegistro" class="modal-trigger">Únete</a></li>
                    <li><a href="#modalLogin" class="modal-trigger">Login</a></li>                    
                </ul>
            <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
            </div>
        </div>
    </nav>
</div>

<!--Hero-->
<div class="section no-pad-bot" id="index-banner">
    <div class="container">
        <h1 class="text_h center header cd-headline letters type">
           <!-- <span>Umg 2017</span> -->
            <span class="cd-words-wrapper waiting">
                <b class="is-visible">UMG</b>
                <b>Formando</b>
                <b>Profesionales</b>
				<b>con</b>
                <b>Valores</b>
            </span>
        </h1>
    </div>
</div>

  <!-- Modal Structure Registro -->
  <div id="modalRegistro" class="modal modal-fixed-footer">  	 	  	
    <div class="modal-content">
    	<h4 class="center-align">Registro</h4>	
    	<div class="row">
  	    <form action="Controllers/RegistroEstudiantes.php" method="POST">
  	    	<div class="input-field col s10">
  		      	<input type="text" id="nombres" name="nombres" onkeypress="return validateInputCharacter(event)" onpaste="return false" required>
  		      	<label for="nombres"><i class="material-icons">person_pin</i> Nombres</label>
  		    </div>
          <div class="col s2">
            <img id="imgNombre">
          </div>

  	      	<div class="input-field col s10">
  	      		<input type="text" id="apellidos" name="apellidos" onkeypress="return validateInputCharacter(event)" onpaste="return false" required>
  	      		<label for="apellidos"><i class="material-icons">person_pin</i> Apellidos</label>
  	      	</div>
            <div class="col s2">
              <img id="imgApellido">
            </div>

  	      	<div class="input-field col s10">
  	      		<input type="text" id="correo" name="correo" onkeypress="return validateInputEmail(event)" onpaste="return false" required>
  	      		<label for="correo"><i class="material-icons">email</i> Correo Electrónico</label>
  	      	</div>
            <div class="col s2">
              <img id="imgCorreo">
            </div>

  	      	<div class="input-field col s10">
  	      		<input type="text" id="telefono" name="telefono" data-length="8" onkeypress="return validateInput(event)" onpaste="return false" required>
  	      		<label for="telefono"><i class="material-icons">settings_cell</i> Teléfono</label>
  	      	</div>
            <div class="col s2">
              <img id="imgTelefono">
            </div>

  	      	<div class="input-field col s10">
  	      		<input type="text" id="establecimiento" name="establecimiento" onkeypress="return validateInputCharacter(event)" onpaste="return false" required>
  	      		<label for="establecimiento"><i class="material-icons">store</i> Establecimiento</label>
  	      	</div>
            <div class="col s2">
              <img id="imgEstablecimiento">
            </div>
        </div>
          <input type="hidden" id="ipNavegador" name="ipNavegador">
    </div>
    <div class="modal-footer">
	      <a class="modal-action modal-close waves-effect waves-blue btn-flat ">Cancelar</a>
	      <button type="submit" class="waves-effect btn blue" name="btn-registrar" id="btn-registrar">Registrar</button>
    </div>	
    </form>
      
  </div>

  <!-- Modal Structure Login -->
  <div id="modalLogin" class="modal">
    <div class="modal-content">
      <h4 class="center-align">Login</h4>  
      
      <form action="Controllers/Login.php" method="POST">
        <div class="input-field">
            <input type="text" id="usuario" name="usuario" onkeypress="return validateInputCharacter(event)" onpaste="return false" required>
            <label for="usuario"><i class="material-icons">person_pin</i> Usuario</label>
        </div>

          <div class="input-field">
            <input type="password" id="password" name="password" onkeypress="return validateInputCharacter(event)" onpaste="return false" required>
            <label for="password"><i class="material-icons">lock_open</i> Contraseña</label>
          </div>          
    </div>
    <div class="modal-footer">
        <a class="modal-action modal-close waves-effect btn-flat ">Cancelar</a>
        <button type="submit" class="waves-effect btn blue">Entrar</button>
    </div>  
    </form>
  </div>

<!--Intro and service-->
<div id="intro" class="section scrollspy">
    <div class="container">
        <div class="row">

          
          <div class="col s12" id="alerta-roja">
            <div class="card-panel center red">
              <span class="white-text">Usted ya ha sido registrado anteriormente.
              </span>
            </div>
          </div>
          
          <div class="col s12"  id="alerta-verde">
            <div class="card-panel center green">
              <span class="white-text">Registro realizado con éxito.
              </span>
            </div>
          </div>            

            <div  class="col s12">
                <h2 class="center header text_h2"> <span class="span_h2"> Ingeniería en Sistemas UMG  </span> <br>Formación con Valores</h2>
            </div>

            <div  class="col s12 m4 l4">
                <div class="center promo promo-example">
                    <i class="mdi-image-flash-on"></i>
                    <h5 class="promo-caption">Speeds up development</h5>
                    <p class="light center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
                </div>
            </div>
            <div class="col s12 m4 l4">
                <div class="center promo promo-example">
                    <i class="mdi-social-group"></i>
                    <h5 class="promo-caption">User Experience Focused</h5>
                    <p class="light center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                </div>
            </div>
            <div class="col s12 m4 l4">
                <div class="center promo promo-example">
                    <i class="mdi-hardware-desktop-windows"></i>
                    <h5 class="promo-caption">Fully responsive</h5>
                    <p class="light center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
                </div>
            </div>
        </div>
    </div>
</div>


<!--Footer-->
  <footer class="page-footer orange">
    <div class="container">
      <div class="row">
        <div class="col  s12">
          <h5 class="white-text">lorem ipsum</h5>
          <p class="grey-text text-lighten-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos obcaecati necessitatibus nihil harum perspiciatis 
            id cupiditate ducimus voluptate rem aliquid aperiam, soluta blanditiis, eligendi minus dignissimos quidem, placeat sint est.</p>


        </div>
        
    </div>
    <div class="footer-copyright">
      <div class="container">
      <a class="orange-text text-lighten-3" target="_blank" href="https://umg.edu.gt">&copy; UMG - Ingeniería en Sistemas de Información 2017</a>
      </div>
    </div>
  </footer>
  
    <!--  Scripts 
	<script src="js/jquery-2.1.1.min.js"></script>   -->
	
	<script src="Views/min/plugin-min.js"></script>
  <script src="Views/min/custom-min.js"></script>
  <script src="Views/js/materialize.min.js"></script>
  <script src="Views/js/Validaciones.js"></script>
    
	<script>
		$(document).ready(function(){      

			$('input #telefono').characterCounter();
      $('.modal-trigger').leanModal();
     
		});

		$.getJSON("https://api.ipify.org/?format=json", function(e) {
        $("#ipNavegador").val(e.ip);
    		//alert(e.ip);
        //ip laptop de mi trabajo 190.111.21.177
		});
	</script>
    </body>
</html>
