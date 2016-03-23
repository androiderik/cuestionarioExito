
                <!DOCTYPE html>
        <html lang="en">

        <head>

            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="description" content="">
            <meta name="author" content="">
            <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
            <title>Quality - Inmobiliaria viendo por ti</title>

            <!-- Bootstrap Core CSS -->
            <link href="css/bootstrap.min.css" rel="stylesheet">

            <!-- Custom CSS -->
            <link href="css/quality.css" rel="stylesheet">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">

            <!-- Custom Fonts -->
            <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
            <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
            <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
            <!--[if lt IE 9]>
                <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
                <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
            <![endif]-->

        </head>

        
            <?php 
                    require 'server/db.php';
                    if(isset($_GET['email']) && !empty($_GET['email']) AND isset($_GET['hash']) && !empty($_GET['hash'])){ 
                         $hash = $_GET['hash'];
                         $email = $_GET['email'];
                         $name = $_GET['name'];
                         $sql = "SELECT `email`, `hash` FROM general WHERE `email` = '$email' AND `hash`='$hash';";
                         $result = mysqli_query($db, $sql); 

                            if(mysqli_num_rows($result) == 1){?>
            
                            <body id="page-top" class="mailResponse">

                                <!-- Navigation -->
                                <nav class="navbar navbar-default navbar-fixed-top">
                                    <div class="container">
                                        <!-- Brand and toggle get grouped for better mobile display -->
                                        <div class="navbar-header page-scroll">
                                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                                <span class="sr-only">Toggle navigation</span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                            </button>
                                            <a class="navbar-brand page-scroll logoNavbar" href="/"><img src="img/quality.svg"></a>
                                            <a class="navbar-brand page-scroll logoNavbarMin" href="/"><img src="img/quality_min.svg"></a>
                                        </div>

                                        
                                        <!-- /.navbar-collapse -->
                                    </div>
                                    <!-- /.container-fluid -->
                                </nav>

                                <div class="container whiteBg">
                                    <div class="intro-text">
                                        <div class="col-xs-12">
                                            <form id="f2" class="infoForm row">
                                                <h2><b><?php echo $name ?></b>, GRACIAS POR TU INTERÉS</h2>
                                                <p class="textResponse">Proporciónanos los siguientes datos para sugerirte una membresía a tu medida</p>
                                                <input name="f2" value="form2" type="text" hidden>
                                                <div class="col-sm-4">
                                                    <input type="text" name="correo" value ="<?php echo $email; ?>"  readonly class="form-control" placeholder="EMAIL">
                                                </div>
                                                <div class="col-sm-4">
                                                    <select name="estado" class="form-control">
                                                    <option value="" disabled selected>ESTADO</option>
                                                    <option value="Aguascalientes">Aguascalientes</option>
                                                    <option value="Baja California">Baja California</option>
                                                    <option value="Baja California Sur">Baja California Sur</option>
                                                    <option value="Campeche">Campeche</option>
                                                    <option value="Coahuila de Zaragoza">Coahuila de Zaragoza</option>
                                                    <option value="Colima">Colima</option>
                                                    <option value="Chiapas">Chiapas</option>
                                                    <option value="Chihuahua">Chihuahua</option>
                                                    <option value="Distrito Federal">Distrito Federal</option>
                                                    <option value="Durango">Durango</option>
                                                    <option value="Guanajuato">Guanajuato</option>
                                                    <option value="Guerrero">Guerrero</option>
                                                    <option value="Hidalgo">Hidalgo</option>
                                                    <option value="Jalisco">Jalisco</option>
                                                    <option value="México">México</option>
                                                    <option value="Michoacán de Ocampo">Michoacán de Ocampo</option>
                                                    <option value="Morelos">Morelos</option>
                                                    <option value="Nayarit">Nayarit</option>
                                                    <option value="Nuevo León">Nuevo León</option>
                                                    <option value="Oaxaca">Oaxaca</option>
                                                    <option value="Puebla">Puebla</option>
                                                    <option value="Querétaro">Querétaro</option>
                                                    <option value="Quintana Roo">Quintana Roo</option>
                                                    <option value="San Luis Potosí">San Luis Potosí</option>
                                                    <option value="Sinaloa">Sinaloa</option>
                                                    <option value="Sonora">Sonora</option>
                                                    <option value="Tabasco">Tabasco</option>
                                                    <option value="Tamaulipas">Tamaulipas</option>
                                                    <option value="Tlaxcala">Tlaxcala</option>
                                                    <option value="Veracruz de Ignacio de la Llave">Veracruz de Ignacio de la Llave</option>
                                                    <option value="Yucatán">Yucatán</option>
                                                    <option value="Zacatecas">Zacatecas</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-4">
                                                    <input name="ciudad" class="form-control" placeholder="CIUDAD">
                                                    
                                                </div>
                                                <div class="col-sm-2">
                                                    <input name="edad" class="form-control" placeholder="EDAD">
                                                        
                                                   
                                                </div>
                                                <div class="col-sm-5">
                                                    <select name="nivelestudios" class="form-control">
                                                        <option value="" disabled selected>NIVEL DE ESTUDIOS</option>
                                                        <option value="bachillerato">Bachillerato</option>
                                                        <option value="carrera técnica" >Carrera técnica</option>
                                                        <option value="licenciatura" >Licenciatura</option>
                                                        <option value="posgrado" >Posgrado</option>
                                                        <option value="otro" >Otro</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-5">
                                                    <select name="ocupacion" class="form-control">
                                                        <option value="" disabled selected>OCUPACIÓN</option>
                                                        <option value="recien egresado">Recién egresado</option>
                                                        <option value="empleado" >Empleado</option>
                                                        <option value="negocio propio" >Negocio propio</option>
                                                        <option value="ama de casa" >Ama de casa</option>
                                                        <option value="jubilado" >Jubilado</option>
                                                        <option value="otro" >Otro</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-4">
                                                    <select name="inversion" class="form-control">
                                                        <option value="" disabled selected>INVERSIÓN</option>
                                                        <option value="< $100,000" > menos de $100,000</option>
                                                        <option value="$100,000" > $100,000</option>
                                                        <option value="> $100,000" > mas de $100,000</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-4">
                                                    <select name="tiempo" class="form-control">
                                                        <option value="" disabled selected>DISPONIBILIDAD DE TIEMPO</option>
                                                         <option value="ratos libres" >Solo en mis ratos libres</option>
                                                        <option value="medio tiempo" >Medio tiempo</option>
                                                        <option value="tiempo completo" >Tiempo completo</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-4">
                                                    <select name="membresia" class="form-control">
                                                        <option value="" disabled selected>TIPO MEMBRESÍA</option>
                                                        <option value="personal" >Personal</option>
                                                        <option value="corporativa" >Corporativa</option>
                                                    </select>
                                                </div>

                                                

                                                <div class="col-xs-12 text-center">
                                                    <button class="submQual" type="submit" value="ENVIAR">ENVIAR</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            <?php } else { ?>
                                 <body id="page-top" class="index errorPg">

                                        <!-- Navigation -->
                                        <nav class="navbar navbar-default navbar-fixed-top">
                                            <div class="container">
                                                <!-- Brand and toggle get grouped for better mobile display -->
                                                <div class="navbar-header page-scroll">
                                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                                        <span class="sr-only">Toggle navigation</span>
                                                        <span class="icon-bar"></span>
                                                        <span class="icon-bar"></span>
                                                        <span class="icon-bar"></span>
                                                    </button>
                                                    <a class="navbar-brand page-scroll logoNavbar" href="/"><img src="img/quality.svg"></a>
                                                    <a class="navbar-brand page-scroll logoNavbarMin" href="/"><img src="img/quality_min.svg"></a>
                                                </div>

                                                
                                                <!-- /.navbar-collapse -->
                                            </div>
                                            <!-- /.container-fluid -->
                                        </nav>
                                        <div class="container floatBg">
                                            <div class="intro-text">
                                                <div class="col-xs-12">
                                                    <div class="row">
                                                        <h2>LO SENTIMOS, <b>HA OCURRIDO UN ERROR</b></h2>
                                                        <p class="textResponse">Inténtalo de nuevo, o regresa a la <a href="/">página principal</a></p>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php }  } else{ ?>
                                    <body id="page-top" class="index errorPg">

                                    <!-- Navigation -->
                                    <nav class="navbar navbar-default navbar-fixed-top">
                                        <div class="container">
                                            <!-- Brand and toggle get grouped for better mobile display -->
                                            <div class="navbar-header page-scroll">
                                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                                    <span class="sr-only">Toggle navigation</span>
                                                    <span class="icon-bar"></span>
                                                    <span class="icon-bar"></span>
                                                    <span class="icon-bar"></span>
                                                </button>
                                                <a class="navbar-brand page-scroll logoNavbar" href="/"><img src="img/quality.svg"></a>
                                                <a class="navbar-brand page-scroll logoNavbarMin" href="/"><img src="img/quality_min.svg"></a>
                                            </div>

                                            
                                            <!-- /.navbar-collapse -->
                                        </div>
                                        <!-- /.container-fluid -->
                                    </nav>
                                    <div class="container floatBg">
                                            <div class="intro-text">
                                                <div class="col-xs-12">
                                                    <div class="row">
                                                        <h2>LO SENTIMOS, <b>HA OCURRIDO UN ERROR</b></h2>
                                                        <p class="textResponse">Inténtalo de nuevo, o regresa a la <a href="/">página principal</a></p>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php } ?>

            <div id="respuestaAjax"></div>
            <footer class="f2foot">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-3 text-left">
                            <a href="/"><img src="img/quality_min.svg"></a>
                        </div>
                        <div class="col-xs-9 text-right">
                            <ul class="list-inline">
                                <li><a href="/#beneficios">BENEFICIOS</a></li>
                                <li><a href="/#funciona">CÓMO FUNCIONA</a></li>
                                <li><a href="/#testimonios">TESTIMONIOS</a></li>
                                <li><a href="/#contacto">CONTACTO</a></li>
                                <li><a href="/faq">FAQ</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>

            <!-- Portfolio Modals -->
            <!-- Use the modals below to showcase details about your portfolio projects! -->

            <!-- jQuery -->
            <script src="js/jquery.js"></script>
            <script type="text/javascript">
                 $(document).click(function (event) {
                  var clickover = $(event.target);
                  var $navbar = $(".navbar-collapse");               
                  var _opened = $navbar.hasClass("in");
                  if (_opened === true && !clickover.hasClass("navbar-toggle")) {      
                      $navbar.collapse('hide');
                  }
              });
             </script>

            <!-- Bootstrap Core JavaScript -->
            <script src="js/bootstrap.min.js"></script>

            <!-- Plugin JavaScript -->
            <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
            <script src="js/classie.js"></script>
            <script src="js/cbpAnimatedHeader.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>       
            <!-- Contact Form JavaScript -->
            <script src="js/jqBootstrapValidation.js"></script>
            <script src="js/contact_me.js"></script>

            <!-- Custom Theme JavaScript -->
            <script src="js/agency.js"></script>
            <!-- Formulario -->
            <script>
                 $(function(){
                    var form = $('form#f2');
                    form.submit(function(e){
                        e.preventDefault();
                        dataString = form.serialize();

                        $.ajax({
                            type:'POST',
                            url:'server/sender.php',
                            data: dataString,
                            // beforeSend: function(){
                            //     swal({   title: "Procesando",   
                            //              text: "Estamos validando tus datos...", 
                            //              showConfirmButton: false });
                            // },
                            success:function(data){
                                $('#respuestaAjax').replaceWith(data);
                            },
                            complete:function(){

                            }
                        });
                        return false;
                    })
                }) ;
     </script>

        </body>

        </html>


	

 