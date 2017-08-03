<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>

    <meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Obaju e-commerce template">
    <meta name="author" content="Ondrej Svestka | ondrejsvestka.cz">
    <meta name="keywords" content="">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <title>
        Redes y equipos pesqueros
    </title>

    <meta name="keywords" content="">

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100' rel='stylesheet' type='text/css'>

    <!-- styles -->
    <link href="../../resources/assets/css/font-awesome.css" rel="stylesheet">
    <link href="../../resources/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../resources/assets/css/animate.min.css" rel="stylesheet">
    <link href="../../resources/assets/css/owl.carousel.css" rel="stylesheet">
    <link href="../../resources/assets/css/owl.theme.css" rel="stylesheet">

    <!-- theme stylesheet -->
    <link href="../../resources/assets/css/style.default.css" rel="stylesheet" id="theme-stylesheet">

    <!-- your stylesheet with modifications -->
    <link href="../../resources/assets/css/custom.css" rel="stylesheet">

    <script src="../../resources/assets/js/redes/respond.min.js"></script>

    <link rel="shortcut icon" href="../../resources/assets/imgn/logo.png">



</head>

<body>

    <!-- *** TOPBAR ***
 _________________________________________________________ -->
    <div id="top">
        <div class="container">
            <div class="col-md-6 offer" data-animate="fadeInDown">
                <a class="btn btn-success btn-sm" data-animate-hover="shake">Oferta del d&iacute;a</a>   <a>¡Cada compra con hasta un 30% de descuento!</a>
            </div>
            <div class="col-md-6" data-animate="fadeInDown">
                <ul class="menu">
                    <li><a href="#" data-toggle="modal" data-target="#login-modal">Iniciar sesi&oacute;n</a>
                    </li>
                    <li><a href="register.php">Nuevo registro</a>
                    </li>
                    <li><a href="contact.php">Cont&aacute;ctanos</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
            <div class="modal-dialog modal-sm">

                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="Login">Inicio de sesión</h4>
                    </div>
                    <div class="modal-body">
                        <form action="customer-orders.html" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" id="email-modal" placeholder="Correo electr&oacute;nico">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="password-modal" placeholder="Contrase&ntilde;a">
                            </div>

                            <p class="text-center">
                                <button class="btn btn-primary"><i class="fa fa-sign-in"></i>Iniciar sesi&oacute;n</button>
                            </p>

                        </form>

                        <p class="text-center text-muted">¿A&uacute;n no te registras?</p>
                        <p class="text-center text-muted"><a href="register.php"><strong>¡Registrate ahora!</strong></a>bEs muy sencillo y en tan solo 1 minuto comenzar&aacute;s a disfrutar de nuestras ofertas especiales</p>

                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- *** TOP BAR END *** -->

    <!-- *** NAVBAR ***
 _________________________________________________________ -->

    <div class="navbar navbar-default yamm" role="navigation" id="navbar">
        <div class="container">
            <div class="navbar-header">

                <a class="navbar-brand home" href="principal.php" data-animate-hover="bounce">
                    <img src="../../resources/assets/imgn/logo.png" alt="Obaju logo" class="hidden-xs">
                    <img src="../../resources/assets/imgn/logo.png" alt="Obaju logo" class="visible-xs"><span class="sr-only"></span>
                </a>
                <div class="navbar-buttons">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="fa fa-align-justify"></i>
                    </button>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search">
                        <span class="sr-only">Toggle search</span>
                        <i class="fa fa-search"></i>
                    </button>
                    <a class="btn btn-default navbar-toggle" href="carrito.php">
                        <i class="fa fa-shopping-cart"></i>  <span class="hidden-xs">0 Productos</span>
                    </a>
                </div>
            </div>
            <!--/.navbar-header -->

            <div class="navbar-collapse collapse" id="navigation">

                <ul class="nav navbar-nav navbar-left">
                    <li class="active"><a href="principal.php">Inicio</a>
                    </li>
                    <li class="dropdown yamm-fw">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Categorias <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="yamm-content">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h5>Redes</h5>
                                            <ul>
                                                <li><a href="category.php">Redes de nylon</a>
                                                </li>
                                                <li><a href="category.php">Red de pesca</a>
                                                </li>
                                                <li><a href="category.php">Recolectoras</a>
                                                </li>
                                                <li><a href="category.php">Alt&iacute;metro</a>
                                                </li>
                                                <li><a href="category.php">Hilo de nylon</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3">
                                            <h5>Se&ntilde;uelos</h5>
                                            <ul>
                                                <li><a href="category.php">Serie "A"</a>
                                                </li>
                                                <li><a href="category.php">Serie "B"</a>
                                                </li>
                                                <li><a href="category.php">Serie 10</a>
                                                </li>
                                                <li><a href="category.php">Serie MLF</a>
                                                </li>
                                                <li><a href="category.php">Tipo cocodrilo</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3">
                                            <h5>Ca&ntilde;as</h5>
                                            <ul>
                                                <li><a href="category.php">Ca&ntilde;as mar</a>
                                                </li>
                                                <li><a href="category.php">Ca&ntilde;as agua dulce</a>
                                                </li>
                                                <li><a href="category.php">Ca&ntilde;as se&ntilde;uelos</a>
                                                </li>
                                                <li><a href="category.php">Carretes</a>
                                                </li>
                                                <li><a href="category.php">Soporte y fundas</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3">
                                            <h5>Arpones</h5>
                                            <ul>
                                                <li><a href="category.php">Arp&oacute;n Gimexsa</a>
                                                </li>
                                                <li><a href="category.php">Arp&oacute;n Hawaiano</a>
                                                </li>
                                                <li><a href="category.php">Liga para Arp&oacute;n</a>
                                                </li>
                                                <li><a href="category.php">Varilla para Arp&oacute;n</a>
                                                </li>
                                                <li><a href="category.php">Punta para Arp&oacute;n</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.yamm-content -->
                            </li>
                        </ul>
                    </li>

                    <!--li class="dropdown yamm-fw">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Template <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="yamm-content">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h5>Shop</h5>
                                            <ul>
                                                <li><a href="principal.php">Homepage</a>
                                                </li>
                                                <li><a href="category.php">Category - sidebar left</a>
                                                </li>
                                                <li><a href="category.php">Category - sidebar right</a>
                                                </li>
                                                <li><a href="category-full.html">Category - full width</a>
                                                </li>
                                                <li><a href="detail.html">Product detail</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3">
                                            <h5>User</h5>
                                            <ul>
                                                <li><a href="register.html">Register / login</a>
                                                </li>
                                                <li><a href="customer-orders.html">Orders history</a>
                                                </li>
                                                <li><a href="customer-order.html">Order history detail</a>
                                                </li>
                                                <li><a href="customer-wishlist.html">Wishlist</a>
                                                </li>
                                                <li><a href="customer-account.html">Customer account / change password</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3">
                                            <h5>Order process</h5>
                                            <ul>
                                                <li><a href="basket.html">Shopping cart</a>
                                                </li>
                                                <li><a href="checkout1.html">Checkout - step 1</a>
                                                </li>
                                                <li><a href="checkout2.html">Checkout - step 2</a>
                                                </li>
                                                <li><a href="checkout3.html">Checkout - step 3</a>
                                                </li>
                                                <li><a href="checkout4.html">Checkout - step 4</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3">
                                            <h5>Pages and blog</h5>
                                            <ul>
                                                <li><a href="blog.html">Blog listing</a>
                                                </li>
                                                <li><a href="post.html">Blog Post</a>
                                                </li>
                                                <li><a href="faq.html">FAQ</a>
                                                </li>
                                                <li><a href="text.html">Text page</a>
                                                </li>
                                                <li><a href="text-right.html">Text page - right sidebar</a>
                                                </li>
                                                <li><a href="404.html">404 page</a>
                                                </li>
                                                <li><a href="contact.html">Contact</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.yamm-content>
                            </li>
                        </ul>
                    </li-->
                </ul>

            </div>
            <!--/.nav-collapse -->

            <div class="navbar-buttons">

                <div class="navbar-collapse collapse right" id="basket-overview">
                    <a href="carrito.php" class="btn btn-primary navbar-btn"><i class="fa fa-shopping-cart"></i><span class="hidden-sm">0
                        Productos</span></a>
                </div>
                <!--/.nav-collapse -->

                <div class="navbar-collapse collapse right" id="search-not-mobile">
                    <button type="button" class="btn navbar-btn btn-primary" data-toggle="collapse" data-target="#search">
                        <span class="sr-only">Toggle search</span>
                        <i class="fa fa-search"></i>
                    </button>
                </div>

            </div>

            <div class="collapse clearfix" id="search">

                <form class="navbar-form" role="search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Buscar">
                        <span class="input-group-btn">

			<button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>

		    </span>
                    </div>
                </form>

            </div>
            <!--/.nav-collapse -->

        </div>
        <!-- /.container -->
    </div>
    <!-- /#navbar -->

    <!-- *** NAVBAR END *** -->

    <div id="all">

        <div id="content">
            <div class="container">

                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="principal.php">Inicio</a>
                        </li>
                        <li>Carrito de compra</li>
                    </ul>
                </div>

                <div class="col-md-9" id="basket">

                    <div class="box">

                        <form method="post" action="checkout1.html">

                            <h1>Carrito de compra</h1>
                            <p class="text-muted">Actualmente tienes 0 producto(s) en tu carrito.</p>
                            <div class="table-responsive">
                                <!--table class="table">
                                    <thead>
                                        <tr>
                                            <th colspan="2">Producto</th>
                                            <th>Cantidad</th>
                                            <th>Precio unitario</th>
                                            <th>Descuento</th>
                                            <th colspan="2">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <a href="#">
                                                    <img src="img/detailsquare.jpg" alt="White Blouse Armani">
                                                </a>
                                            </td>
                                            <td><a href="#">White Blouse Armani</a>
                                            </td>
                                            <td>
                                                <input type="number" value="2" class="form-control">
                                            </td>
                                            <td>$123.00</td>
                                            <td>$0.00</td>
                                            <td>$246.00</td>
                                            <td><a href="#"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#">
                                                    <img src="img/basketsquare.jpg" alt="Black Blouse Armani">
                                                </a>
                                            </td>
                                            <td><a href="#">Black Blouse Armani</a>
                                            </td>
                                            <td>
                                                <input type="number" value="1" class="form-control">
                                            </td>
                                            <td>$200.00</td>
                                            <td>$0.00</td>
                                            <td>$200.00</td>
                                            <td><a href="#"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th colspan="5">Total</th>
                                            <th colspan="2">$446.00</th>
                                        </tr>
                                    </tfoot>
                                </table-->

                            </div>
                            <!-- /.table-responsive -->

                            <div class="box-footer">
                                <div class="pull-left">
                                    <a href="category.php" class="btn btn-default"><i class="fa fa-chevron-left"></i> Continuar comprando</a>
                                </div>
                                <div class="pull-right">
                                    <button class="btn btn-default"><i class="fa fa-refresh"></i> Actualizar carrito</button>
                                    <button type="submit" class="btn btn-primary">Realizar compra <i class="fa fa-chevron-right"></i>
                                    </button>
                                </div>
                            </div>

                        </form>

                    </div>
                    <!-- /.box -->


                    <div class="row same-height-row">
                        <div class="col-md-3 col-sm-6">
                            <div class="box same-height">
                                <h3>Tambi&eacute;n te pueden interesar estos productos</h3>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6">
                            <div class="product same-height">
                                <div class="flip-container">
                                    <div class="flipper">
                                        <div class="front">
                                            <a href="detail.html">
                                                <img src="../assets/imgn/producto02.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="back">
                                            <a href="detail.html">
                                                <img src="../assets/imgn/producto02.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a href="detail.html" class="invisible">
                                    <img src="../assets/imgn/producto02.jpg" alt="" class="img-responsive">
                                </a>
                                <div class="text">
                                    <h3>Carrete de grafito</h3>
                                    <p class="price">$535.00</p>
                                </div>
                            </div>
                            <!-- /.product -->
                        </div>

                        <div class="col-md-3 col-sm-6">
                            <div class="product same-height">
                                <div class="flip-container">
                                    <div class="flipper">
                                        <div class="front">
                                            <a href="detail.html">
                                                <img src="../assets/imgn/producto04.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="back">
                                            <a href="detail.html">
                                                <img src="../assets/imgn/producto04.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a href="detail.html" class="invisible">
                                    <img src="../assets/imgn/producto04.jpg" alt="" class="img-responsive">
                                </a>
                                <div class="text">
                                    <h3>Anzuelo cuchara giratoria</h3>
                                    <p class="price">$139.00</p>
                                </div>
                            </div>
                            <!-- /.product -->
                        </div>


                        <div class="col-md-3 col-sm-6">
                            <div class="product same-height">
                                <div class="flip-container">
                                    <div class="flipper">
                                        <div class="front">
                                            <a href="detail.html">
                                                <img src="../assets/imgn/producto05.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="back">
                                            <a href="detail.html">
                                                <img src="../assets/imgn/producto05.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a href="detail.html" class="invisible">
                                    <img src="../assets/imgn/producto05.jpg" alt="" class="img-responsive">
                                </a>
                                <div class="text">
                                    <h3>Esmerillones</h3>
                                    <p class="price">$200.00</p>

                                </div>
                            </div>
                            <!-- /.product -->
                        </div>

                    </div>


                </div>
                <!-- /.col-md-9 -->

                <div class="col-md-3">
                    <div class="box" id="order-summary">
                        <div class="box-header">
                            <h3>Orden de compra</h3>
                        </div>
                        <p class="text-muted">El env&iacute;o y los costos adicionales se calculan en funci&oacute;n de los valores introducidos.</p>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>Subtotal</td>
                                        <th>$0.00</th>
                                    </tr>
                                    <tr>
                                        <td>Env&iacute;o</td>
                                        <th>$0.00</th>
                                    </tr>
                                    <tr>
                                        <td>IVA</td>
                                        <th>$0.00</th>
                                    </tr>
                                    <tr class="total">
                                        <td>Total</td>
                                        <th>$0.00</th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>


                    <div class="box">
                        <div class="box-header">
                            <h4>C&oacute;digo de promoci&oacute;n</h4>
                        </div>
                        <p class="text-muted">Si tienes un codigo de promoci&oacute;n, por favor introducelo en el siguiente cuadro.</p>
                        <form>
                            <div class="input-group">

                                <input type="text" class="form-control">

                                <span class="input-group-btn">

					<button class="btn btn-primary" type="button"><i class="fa fa-gift"></i></button>

				    </span>
                            </div>
                            <!-- /input-group -->
                        </form>
                    </div>

                </div>
                <!-- /.col-md-3 -->

            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->

        <!-- *** FOOTER ***
 _________________________________________________________ -->
        <div id="footer" data-animate="fadeInUp">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <h4>Pag&iacute;nas</h4>

                        <ul>
                            <li><a href="text.html">Nosotros</a>
                            </li>
                            <li><a href="text.html">Terminos y condiciones</a>
                            </li>
                            <li><a href="faq.html">Preguntas frecuentes</a>
                            </li>
                            <li><a href="contact.php">Cont&aacute;ctanos</a>
                            </li>
                        </ul>

                        <hr>

                        <h4>Opciones del usuario</h4>

                        <ul>
                            <li><a href="register.php" data-toggle="modal" data-target="#login-modal">Acceso</a>
                            </li>
                            <li><a href="register.php">Registro</a>
                            </li>
                        </ul>

                        <hr class="hidden-md hidden-lg hidden-sm">

                    </div>
                    <!-- /.col-md-3 -->

                    <div class="col-md-3 col-sm-6">

                        <h4>Principales categor&iacute;as</h4>

                        <h5>Redes</h5>

                        <ul>
                            <li><a href="category.php">Redes de nylon</a>
                            </li>
                            <li><a href="category.php">Hilo de nylon</a>
                            </li>
                            <li><a href="category.php">Recolectoras</a>
                            </li>
                        </ul>

                        <h5>ca&ntilde;as</h5>
                        <ul>
                            <li><a href="category.php">Ca&ntilde;as de mar</a>
                            </li>
                            <li><a href="category.php">Ca&ntilde;as de agua dulce</a>
                            </li>
                            <li><a href="category.php">Se&ntilde;uelos</a>
                            </li>
                        </ul>

                        <hr class="hidden-md hidden-lg">

                    </div>
                    <!-- /.col-md-3 -->

                    <div class="col-md-3 col-sm-6">

                        <h4>D&oacute;nde encontr&aacute;rnos</h4>

                        <p><strong>Vis&iacute;tanos en:</strong>
                            <br>Jes&uacute;s Garc&iacute;a 187
                            <br>Col. Centro
                            <br>C.P. 45100
                            <br>Zapopan, Jalisco
                            <br>
                            <strong>M&eacute;xico</strong>
                        </p>

                        <a href="contact.php">Ir a cont&aacute;cto</a>

                        <hr class="hidden-md hidden-lg">

                    </div>
                    <!-- /.col-md-3 -->



                    <div class="col-md-3 col-sm-6">

                        <h4>Rec&iacute;be nuestras ofertas</h4>

                        <p class="text-muted">Mamt&eacute;nte actualizado con nuestras m&aacute;s recientes ofertas y los nuevos art&iacute;culos de nuestro blog.</p>

                        <form>
                            <div class="input-group">

                                <input type="text" class="form-control" placeholder="Correo electr&oacute;nico">

                                <span class="input-group-btn">

			    <button class="btn btn-default" type="button">¡Suscr&iacute;bete!</button>

			</span>

                            </div>
                            <!-- /input-group -->
                        </form>

                        <hr>

                        <h4>Nuestras redes sociales</h4>

                        <p class="social">
                            <a href="#" class="facebook external" data-animate-hover="shake"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="twitter external" data-animate-hover="shake"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="instagram external" data-animate-hover="shake"><i class="fa fa-instagram"></i></a>
                            <a href="#" class="gplus external" data-animate-hover="shake"><i class="fa fa-google-plus"></i></a>
                            <a href="#" class="email external" data-animate-hover="shake"><i class="fa fa-envelope"></i></a>
                        </p>


                    </div>
                    <!-- /.col-md-3 -->

                </div>
                <!-- /.row -->

            </div>
            <!-- /.container -->
        </div>
        <!-- /#footer -->

        <!-- *** FOOTER END *** -->




        <!-- *** COPYRIGHT ***
 _________________________________________________________ -->
        <div id="copyright">
            <div class="container">
                <div class="col-md-6">
                    <p class="pull-left">© 2017 CODEV.</p>

                </div>

            </div>
        </div>
        <!-- *** COPYRIGHT END *** -->



    </div>
    <!-- /#all -->



    

    <!-- *** SCRIPTS TO INCLUDE ***
 _________________________________________________________ -->
    <script src="js/jquery-1.11.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.cookie.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/modernizr.js"></script>
    <script src="js/bootstrap-hover-dropdown.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/front.js"></script>



</body>

</html>