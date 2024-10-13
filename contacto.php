<?php 
    if(isset($_POST) && $_POST['nombre'] != '')
    {
      require_once('phpmailer/class.phpmailer.php');
      $correo = new PHPMailer(); //Creamos una instancia en lugar usar mail();
      $correo->SetFrom("adolfo@factoridea.com.mx", "PAZ SEGUROS Y FINANZAS");
      $correo->AddAddress("adolfo@factoridea.com.mx", "Registro de Contacto");
      $correo->Subject = "Formulario de Contacto";
      $mensaje = "<strong>Nombre: </strong>".$_POST['nombre']."<br>";
      $mensaje.= "<strong>Correo: </strong>".$_POST['correo']."<br>";
      $mensaje.= "<strong>Número telefónico: </strong>".$_POST['telefono']."<br>";
      $mensaje.= "<strong>Mensaje: </strong><br>".$_POST['mensaje']."<br>";
      $correo->MsgHTML($mensaje);  
      if(!$correo->Send()) {
        //echo "Hubo un error: " . $correo->ErrorInfo;
      } else {
        // echo "Mensaje enviado con exito.";
      }
    }
      $urlmonterrey = urlencode('Morelia 6, 3er piso, Roma Norte 06700');
      $urlciudadmexico = urlencode('Callejón de los Ayala 101, Del Valle, San Pedro Garza Garcia N.L.');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CONTACTO</title>

    <meta name="description" content="CONTACTO">
    <meta name="author" content="CONTACTO">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body>
    <header class="header">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <nav class="navbar navbar-default navbar-fixed-top" role="navigation" data-spy="affix" data-offset-top="200">
              <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                    <a href="index.html" class="navbar-brand"><img src="img/logo.png" width="250" class="img-responsive center-block"> </a>                 
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav navbar-right" id="main_navigation_menu">
                    <li class="active"><a href="index.html">Inicio</a></li>
                    <li><a href="about.html">Acerca de</a></li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Servicios <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="seguros.html">Seguros</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="fianzas.html">Fianzas</a></li>
                      </ul>
                    </li>
                    <li style="border:0"><a href="contacto.php">Contacto</a></li>
                  </ul>

                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
            </nav>            
          </div>
        </div>
      </div>
    </header> 
    <section id="section-home-banner">
      <div class="container">
        <div class="row text-center mbotom10" >
           <img src="img/tranquilidad.png" class="img-responsive center-block">
        </div>
        <div class="row text-center">
           <img src="img/riesgo.png" class="img-responsive center-block">
        </div>        
      </div>
    </section>
    <section id="section-contacto-titular">
       <p>&nbsp;</p>
       <h2 class="text-center"><span class="boderh2">CONTACTO</span></h2>
       <p>&nbsp;</p>
    </section>
    <section id="section-contacto" style="background:#254E5B">
      <div class="container">
        <div class="row mtop30" > 
          <div class="col-md-5 col-sm-5 col-xs-12">
            <ul class="nav nav-tabs">
              <li class="active"><a data-toggle="tab" href="#monterrey">Cd. México</a></li>
            </ul> 
            <div class="visible-xs" style="padding:5px !important">&nbsp;</div>
            <div class="tab-content">
              <div id="cdmexico" class="tab-pane fade in active">
                <iframe id="CDMiframe" width="450" height="450" frameborder="0" style="border:0;pointer-events:none" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDOS63XR6y8BmwjVzicEX_0CNuTrpu--i0&q=<?php echo $urlmonterrey ?>" allowfullscreen>
                </iframe>
                <p style="padding:10px">&nbsp;</p>
                <p style="color:#fff !important;padding:0">Morelia 6, 3er piso <br> Col. Roma Norte.</p>
                <p style="color:#fff !important;padding:0">C&oacute;digo Postal: 06700</p>
                <p style="color:#fff !important;padding:0">Tel&eacute;fonos: <a href="tel://55 52086996" style="color:#fff">55 52086996</a> <a href="tel://55 52087005" style="color:#fff">55 52087005</a></p>
              </div>
              <div id="mexico" class="tab-pane fade">
                <img src="img/mapa.jpg" class="img-responsive center-block">
              </div>
            </div>             
          </div> 
          <div class="col-md-1 col-sm-1 hidden-xs"></div>
          <p class="visible-xs">&nbsp;</p>
          <div class="col-md-5 col-sm-5 col-xs-12">
            <ul class="nav nav-tabs">
              <li class="active"><a data-toggle="tab" href="#mexico">Monterrey</a></li>
            </ul> 
            <div class="visible-xs" style="padding:5px !important">&nbsp;</div>
            <div class="tab-content">
              <div id="monterrey" class="tab-pane fade in active">

                <iframe id="monterreyiframe" width="450" height="450" frameborder="0"  style="border:0;pointer-events:none"  src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDOS63XR6y8BmwjVzicEX_0CNuTrpu--i0&q=<?php echo $urlciudadmexico ?>"  allowfullscreen>
                </iframe>
                <p style="padding:10px">&nbsp;</p>
                <p style="color:#fff !important;padding:0">Callejón de los Ayala 101 Desp. 21<br> Col. Del Valle <br> San Pedro Garza Garcia N.L.</p>
                <p style="color:#fff !important;padding:0">C&oacute;digo Postal: 66220</p>
                <p style="color:#fff !important;padding:0">Tel&eacute;fonos: <a href="tel://81 11671555" style="color:#fff">81 11671555</a></p>
              </div>
              <div id="mexico" class="tab-pane fade">
                <img src="img/mapa.jpg" class="img-responsive center-block">
              </div>
            </div>             
          </div> 
          <p>&nbsp;</p>
        </div>

    </section>
    <section id="section-contacto-formulario">
      <div class="row">
          <div class="col-md-2 col-sm-2 col-xs-4"></div>
          <div class="col-md-8 col-sm-8 col-xs-12">
               <p class="text-center">Si deseas solicitar información sobre nuestros diversos tipos de seguros y fianzas, estamos a tus órdenes. Contáctanos aquí:</p>
              <form action="" method="post">
                <div class="row">
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                      <label for="exampleInputPassword1">Nombre completo</label>
                      <input type="text" class="form-control" name="nombre" id="exampleInputPassword1">
                    </div>  
                  </div>                
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Correo electrónico</label>
                      <input type="email" class="form-control" name="correo" id="exampleInputEmail1">
                    </div>                  
                  </div>
              
                </div>
                <div class="row">
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                      <label for="exampleInputPassword1">Tema:</label>
                      <input type="text" class="form-control" name="tema" id="exampleInputPassword1">
                    </div>  
                  </div>                
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Número telefónico:</label>
                      <input type="text" class="form-control" name="telefono" id="exampleInputEmail1">
                    </div>                  
                  </div>
              
                </div>
                <div class="row">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Mensaje:</label>
                      <textarea rows="5" name="mensaje" class="form-control"></textarea>
                    </div> 
                  </div>                
                </div>
                <input type="image" src="img/enviar.png">
              </form>
            </div>
            <div class="col-md-2 col-sm-2 col-xs-4"></div>
          </div>
        </div>
        <p>&nbsp;</p>
    </section>
    <section id="section-convencidos" class="">
      <div class="container">
        <div class="row">
            <p class="text-center">"Convencidos de que el servicio y una relación cercana con nuestros clientes forman nuestra fortaleza".</p>
        </div>
      </div>
    </section>
    <section id="section-email">
      <div class="container-fluid">
        <div class="col-md-2 col-sm-2 col-xs-12">
          <img src="img/logopaz.png" class="img-responsive center-block">
        </div>
        <div class="col-md-8 col-sm-8 col-xs-12 text-center p30">
          <a href="mailto:info@pazsegurosyfianzas.com" class="">info@pazsegurosyfianzas.com</a>
        </div>
        <div class="col-md-2 col-sm-2 col-xs-12">
         <div class="col-md-6 col-sm-6 col-xs-6 p30">
          <a href="http://twitter.com/home/?status=http://mx.ypgo.net/10795499536" target="_blank"><img src="img/twiter.png" class="img-responsive center-block"></a>
         </div> 
         <div class="col-md-6 col-sm-6 col-xs-6 p30">
          <a href="https://www.facebook.com/pazsegurosyfianzas.com.mx/?fref=nf" target="_blank"><img src="img/facebook.png" class="img-responsive center-block"></a>
         </div> 
        </div>        
      </div>
    </section>
    <footer>
      <div class="col-md-9 col-sm-9 col-xs-12">
          <p class="text-left">© 2016 Paz Seguros y Fianzas  |  All Rights Reserved </p>        
      </div>
      <div class="col-md-3 col-sm-3 col-xs-12">
        <p class="text-right"><a href="http://factoridea.us" class="icon-factor" style="padding-right: 32px;padding-top: 10px;color: #b8b8b8;">Designed and developed by Factor Idea</a></p>
    </footer>
  </body>
</html>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.nav.js"></script>
<script>
$(document).ready(function() {

  $('#monterreyiframe').attr('style','border:0;pointer-events:none');
  $('#monterrey').click(function() {
    //$(this).css('pointer-events', 'auto');

    $('#monterreyiframe').attr('style','border:0;pointer-events:auto')
  });

  $('#CDMiframe').attr('style','border:0;pointer-events:none');
  $('#cdmexico').click(function() {
    //$(this).css('pointer-events', 'auto');

    $('#CDMiframe').attr('style','border:0;pointer-events:auto')
  });  
});  
</script>