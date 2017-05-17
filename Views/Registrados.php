<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <meta name="theme-color" content="#2196F3">
    <link rel="shortcut icon" href="../Views/images/iconoUmg.jpg" type="image/x-icon"/>
    <title>UMG</title>

    <!-- CSS  -->
    <link href="../Views/min/plugin-min.css" type="text/css" rel="stylesheet">
    <link href="../Views/min/custom-min.css" type="text/css" rel="stylesheet" >
  	<link rel="stylesheet" type="text/css" href="../Views/css/materialize.min.css">
  	<link rel="stylesheet" href="../Views/css/estilos.css">
  	<link rel="stylesheet" href="../Views/css/style.css">
  	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

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
                    
                    <li><a href="CerrarSesion.php">Cerrar Sesión</a></li>                  
                </ul>
                <ul id="nav-mobile" class="side-nav">
                    
                    <li><a href="CerrarSesion.php">Cerrar Sesión</a></li>                    
                </ul>
            <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
            </div>
        </div>
    </nav>
</div>    

            <div  class="col s12">
            	<h3 class="center header text_h2"><span class="span_h2"> Listado de Estudiantes Registrados  </span></h3>                	
            </div>


                <div class="container">
                	<form action="" method="POST">
                		<button  type="submit" name="btn-export" id="btn-export">  
                			<a href=""><i class="material-icons">system_update_alt</i></a>              	
                		</button>
                	</form>
                	<a href=""></a>
                    <table class=" responsive-table bordered centered">
				        <thead>
				          <tr>
				              <th>Nombres</th>
				              <th>Apellidos</th>
				              <th>Correo</th>
				              <th>Teléfono</th>
				              <th>Establecimiento</th>
				              <th>Fecha de Registro</th>
				          </tr>
				        </thead>

				        <tbody>
				        <?php foreach ($listaEstudiantes as $Model): ?>

				          <tr>
				            <td><?php echo $Model['nombres']; ?></td>
				            <td><?php echo $Model['apellidos']; ?></td>
				            <td><?php echo $Model['correo']; ?></td>
				            <td><?php echo $Model['telefono']; ?></td>
				            <td><?php echo $Model['establecimiento']; ?></td>
				            <td><?php echo $Model['fechaRegistro']; ?></td>
				          </tr>				          
				        <?php endforeach; ?>
				        </tbody>
				      </table>
				      <br>
				      

                 <ul class="pagination">        
                             <?php                
                                  for($i=1;$i<=$total_paginas;$i++)
                                  {
                                      if($i == $inicio ){
                                           echo "<li class='active blue'><a>".$i." </a></li>";
                                      }    
                                      else{
                                           echo "<li><a href='?pagina=".$i."'>".$i." </a></li>";  
                                      }                        
                                  }           
                               ?>
                 </ul>
   

                 <h6 class="text-left">
                      <strong>
                          <?php 
                              if($inicio == 0) $inicioPag = 1;
                              else $inicioPag = $inicio;
                                  echo "Página ".$inicioPag." de ".$total_paginas;
                                  echo " (Total de registros ".$total_registros.")"; 
                                      
                          ?>
                      </strong>
                 </h6> 			
                </div>           
        </div>
    </div>
</div>


<!--Footer-->
  <footer class="page-footer orange">
    <div class="container">
      <div class="row">
        <div class="col  s12">
          <h5 class="white-text">Company Bio</h5>
          <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>


        </div>
        
    </div>
    <div class="footer-copyright">
      <div class="container">
      <a class="orange-text text-lighten-3"  target="_blank" href="https://umg.edu.gt">&copy; UMG - Ingeniería en Sistemas de Información 2017</a>
      </div>
    </div>
  </footer>  
    <!--  Scripts 
	<script src="js/jquery-2.1.1.min.js"></script>   -->
	
	<script src="../Views/min/plugin-min.js"></script>
  <script src="../Views/min/custom-min.js"></script>
  <script src="../Views/js/materialize.min.js"></script>
  <script src="../Views/js/Validaciones.js"></script>
    
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
