<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Salón y Spá Marbella</title>

    <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <link href="public/views/css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="public/views/css/freelancer.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="public/views/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="public/views/css/animate.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

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
                <a class="navbar-brand" href="#page-top">Salón y Spá Marbella</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#signin">Registrarse</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#registered">Registrados</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <img class="img-responsive" src="img/logo.png" alt="">
                    <div class="intro-text">
                        <span class="name">Registro 2016</span>
                        <hr class="star-light">
                        <span class="skills">Salón y Spá Marbella</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Sing In Section -->
    <section id="signin">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="record">Registro</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                    <form name="sentMessage" id="contactForm" action="functions/call.Functions.Register.php" method="POST" enctype="multipart/form-data">
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Nombres</label>
                                <input type="text" name="name" class="form-control" placeholder="Nombres" id="name" autocomplete="off">
                                <p class="help-block text-danger animated bounceIn retraso-2" id="helpname"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Apellidos</label>
                                <input type="text" name="lastname" class="form-control" placeholder="Apellidos" id="lastname" autocomplete="off">
                                <p class="help-block text-danger animated bounceIn retraso-2" id="helplast"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Correo Electronico</label>
                                <input type="text" name="email" class="form-control" placeholder="Correo Electronico" id="email" autocomplete="off">
                                <p class="help-block text-danger animated bounceIn retraso-2" id="helpemail"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Telefono</label>
                                <input type="tel" name="phone" class="form-control" placeholder="Telefono" id="phone"  autocomplete="off">
                                <p class="help-block text-danger animated bounceIn retraso-2" id="helpphone"></p>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="button" class="btn btn-success btn-lg" id="buttone">Registrar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Registered Section -->
    <section class="success" id="registered">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Registrados</h2>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="table-responsive">
                       <table class="table table-striped" id="registered">
                           <thead>
                               <tr>
                                   <th>No.</th>
                                   <th>Nombre</th>
                                   <th>Apellido</th>
                                   <th>Telefono</th>
                                   <th>Correo</th>
                               </tr>
                           </thead>
                           <tbody>

                           </tbody>
                       </table>
                   </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Footer -->
    <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                        <h3>Direccion</h3>
                        <p>9a. Calle 6-14 zona 1,<br>Retalhuleu</p>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>En la Web</h3>
                        <ul class="list-inline">
                            <li>
                                <a href="https://www.facebook.com/Sal%C3%B3n-y-Sp%C3%A1-Marbella-1687890978131192" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Telefonos</h3>
                        <p>Cel. 5914-3127 <br>
                          Cel. 4732-4466
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Arte y Diseño idea&dream
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll visible-xs visible-sm">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

    <!-- jQuery -->
    <script src="public/views/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="public/views/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="public/views/js/jquery.easing.min.js"></script>
    <script src="public/views/js/classie.js"></script>
    <script src="public/views/js/cbpAnimatedHeader.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="public/views/js/freelancer.js"></script>
    <script src="public/views/js/jqProject.js"></script>

</body>

</html>
