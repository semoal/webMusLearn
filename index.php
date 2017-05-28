<?php 
include ('source/login2.php');
?>
<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MusLearn - Letras para aprendizaje online</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
	
	<!-- Controlador para cambiar de estilo -->
	<script type="text/javascript" src="styleswitcher.js"></script>
	
	<!-- Hojas de estilo para el cambio de idioma -->
	<link rel="stylesheet" type="text/css" href="espanyol.css"
		  title="espanyol"/>
	<link rel="alternate stylesheet" type="text/css" href="ingles.css"
		  title="ingles"/>
		  
</head>
<style type="text/css">
	body,
	html {
	    width: 100%;
	    height: 100%;
	}

	body,
	h1,
	h2,
	h3,
	h4,
	h5,
	h6 {
	    font-family: "Lato","Helvetica Neue",Helvetica,Arial,sans-serif;
	    font-weight: 700;
	}

	.topnav {
	    font-size: 14px; 
	}

	.lead {
	    font-size: 18px;
	    font-weight: 400;
	}

	.intro-header {
	    padding-top: 50px;
	    padding-bottom: 50px;
	    text-align: center;
	    color: #f8f8f8;
	    background: url('https://cdn.shopify.com/s/files/1/1065/3374/files/impactf5-banner4.jpg') no-repeat center center;
	    background-size: cover;
	}

	.intro-message {
	    position: relative;
	    padding-top: 20%;
	    padding-bottom: 20%;
	}

	.intro-message > h1 {
	    margin: 0;
	    text-shadow: 2px 2px 4px rgba(0,0,0,0.2);
	    font-size: 5em;
	}

	.intro-divider {
	    width: 400px;
	    border-top: 1px solid #f8f8f8;
	    border-bottom: 1px solid rgba(0,0,0,0.2);
	}

	.intro-message > h3 {
	    text-shadow: 2px 2px 3px rgba(0,0,0,0.6);
	}

	@media(max-width:767px) {
	    .intro-message {
	        padding-bottom: 15%;
	    }

	    .intro-message > h1 {
	        font-size: 3em;
	    }

	    ul.intro-social-buttons > li {
	        display: block;
	        margin-bottom: 20px;
	        padding: 0;
	    }

	    ul.intro-social-buttons > li:last-child {
	        margin-bottom: 0;
	    }

	    .intro-divider {
	        width: 100%;
	    }
	}

	.network-name {
	    text-transform: uppercase;
	    font-size: 14px;
	    font-weight: 400;
	    letter-spacing: 2px;
	}

	.content-section-a {
	    padding: 50px 0;
	    background-color: #f8f8f8;
	}

	.content-section-b {
	    padding: 50px 0;
	    border-top: 1px solid #e7e7e7;
	    border-bottom: 1px solid #e7e7e7;
	}

	.section-heading {
	    margin-bottom: 30px;
	}

	.section-heading-spacer {
	    float: left;
	    width: 200px;
	    border-top: 3px solid #e7e7e7;
	}

	.banner {
	    padding: 100px 0;
	    color: #f8f8f8;
	    background: url('img/banner.png') no-repeat center center;
	    background-size: cover;
	}

	.banner h2 {
	    margin: 0;
	    text-shadow: 2px 2px 3px rgba(0,0,0,0.6);
	    font-size: 3em;
	}

	.banner ul {
	    margin-bottom: 0;
	}

	.banner-social-buttons {
	    float: right;
	    margin-top: 0;
	}

	@media(max-width:1199px) {
	    ul.banner-social-buttons {
	        float: left;
	        margin-top: 15px;
	    }
	}

	@media(max-width:767px) {
	    .banner h2 {
	        margin: 0;
	        text-shadow: 2px 2px 3px rgba(0,0,0,0.6);
	        font-size: 3em;
	    }

	    ul.banner-social-buttons > li {
	        display: block;
	        margin-bottom: 20px;
	        padding: 0;
	    }

	    ul.banner-social-buttons > li:last-child {
	        margin-bottom: 0;
	    }
	}

	footer {
	    padding: 50px 0;
	    background-color: #f8f8f8;
	}

	p.copyright {
	    margin: 15px 0 0;
	}
</style>

<body>

   <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
        <div class="container topnav">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Activa</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand topnav" href="index.html"> 
				<?php
				if(isset($_SESSION['nombre'])){
					echo $_SESSION['nombre'];
				}else{

					echo "MusLearn";
				}
				   ?>
				</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
	                <?php 
	                if(isset($_SESSION['nombre'])){
						?>
						<li>
                        <a  href="source/profile.php"><p class="espanyol">Perfil</p><p class="ingles">Profile</p></a>
                    	</li>
                    	<li>
                        <a  href="source/logout.php"><p class="espanyol">Salir</p><p class="ingles">Logout</p></a>
                    	</li>
						<?php
					}else{
					}
	                ?>
                    <li>
                        <a  href="about.html"><p class="espanyol">Sobre nosotros</p><p class="ingles">About us</p></a>
                    </li>
                    <li>
                        <a href="services.html"><p class="espanyol">¿Qué es?</p><p class="ingles">About MusLearn</p></a>
                    </li>
                    <li>
                        <a data-toggle="modal" href="#loginModal"><p class="espanyol">Accede</p><p class="ingles">Log in/Register</p></a>
                    </li>
					<li>
						<a href="#" onclick="setActiveStyleSheet('espanyol');
						   return false;"><img src="img/es.png" width="25" height="25"></a>
					</li>
					<li>
						<a href="#" onclick="setActiveStyleSheet('ingles');
						   return false;"><img src="img/en.png" width="25" height="25"></a>
					</li>
                </ul>
            </div>
        </div>
    </nav>


   	<!-- LOGIN MODAL -->
	  <div class="modal fade" id="loginModal" role="dialog">
	    <div class="modal-dialog">
	      <div class="modal-content">
	        <div class="modal-header">
	          <button type="button" class="close" data-dismiss="modal">&times;</button>
	          <h3 class="espanyol"> Inicio de sesión </h3>
			  <h3 class="ingles"> Log in </h3>
	        </div>
	        <div class="modal-body">
	           <form class="form-signin" method="POST" action="source/login2.php">
	            <div class="form-group">
	              <label for="usrname"><p class="espanyol"><span class="glyphicon glyphicon-user"></span> Usuario</p>
				  <p class="ingles"><span class="glyphicon glyphicon-user"></span> User</p></label>
	              <input type="text" name="inputLogin" class="form-control espanyol" id="usrname" placeholder="Introduce tu usuario">
				  <input type="text" name="inputLogin" class="form-control ingles" id="usrname" placeholder="Enter your username">
	            </div>
	            <div class="form-group">
	              <label for="psw"><p class="espanyol"><span class="glyphicon glyphicon-eye-open"></span> Contraseña</p>
				  <p class="ingles"><span class="glyphicon glyphicon-eye-open"></span> Password</p></label>
	              <input type="password" name="inputLoginPassword" class="form-control espanyol" id="psw" placeholder="Introduce tu contraseña">
				  <input type="password" name="inputLoginPassword" class="form-control ingles" id="psw" placeholder="Enter your password">
	            </div>
	            <button type="submit" class="btn btn-default btn-success btn-block espanyol"><span class="glyphicon glyphicon-off"></span> Acceder</button>
				<button type="submit" class="btn btn-default btn-success btn-block ingles"><span class="glyphicon glyphicon-off"></span> Login</button>
	          </form>
	        </div>
	        <div class="modal-footer">
	          <button type="submit" class="btn btn-default btn-default pull-left espanyol" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cerrar</button>
			  <button type="submit" class="btn btn-default btn-default pull-left ingles" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
	          <p class="espanyol">¿No estas registrado? <a data-toggle="modal" href="#registerModal">Registrate</a></p>
			  <p class="ingles">Not registered yet? <a data-toggle="modal" href="#registerModal">Create account</a></p>
	        </div>
	      </div>
	    </div>
	  </div> 
<!-- ./login modal -->

<!-- register modal -->
	  <div class="modal fade" id="registerModal" role="dialog">
	    <div class="modal-dialog">
	      <div class="modal-content">
	        <div class="modal-header">
	          <button type="button" class="close" data-dismiss="modal">&times;</button>
	          <h3 class="espanyol"> Registro </h3>
			  <h3 class="ingles"> Register form </h3>
	        </div>
	        <div class="modal-body">
	           <form class="form-signin" method="POST" action="source/registro.php">
	            <div class="form-group">
	              <label for="usrname"><p class="espanyol"><span class="glyphicon glyphicon-user"></span> Usuario</p>
				  <p class="ingles"><span class="glyphicon glyphicon-user"></span> User</p></label>
	              <input type="text" name="usr" class="form-control espanyol" id="usrname" placeholder="Introduce tu usuario">
				  <input type="text" name="usr" class="form-control ingles" id="usrname" placeholder="Enter your username">
	            </div>
	            <div class="form-group">
	              <label for="psw"><p class="espanyol"><span class="glyphicon glyphicon-eye-open"></span> Contraseña</p>
				  <p class="ingles"><span class="glyphicon glyphicon-eye-open"></span> Password</p></label>
	              <input type="password" name="pwd1" class="form-control espanyol" id="psw" placeholder="Introduce tu contraseña">
				  <input type="password" name="pwd1" class="form-control ingles" id="psw" placeholder="Enter your password">
	            </div>
				<div class="form-group">
	              <label for="psw"><p class="espanyol"><span class="glyphicon glyphicon-eye-open"></span> Repite tu Contraseña</p>
				  <p class="ingles"><span class="glyphicon glyphicon-eye-open"></span> Confirm Password</p></label>
	              <input type="password" name="pwd2" class="form-control espanyol" id="psw" placeholder="Confirma tu contraseña">
				  <input type="password" name="pwd2" class="form-control ingles" id="psw" placeholder="Re-type your password">
	            </div>
	            <button type="submit" class="btn btn-default btn-success btn-block espanyol"><span class="glyphicon glyphicon-off"></span> Registrate</button>
				<button type="submit" class="btn btn-default btn-success btn-block ingles"><span class="glyphicon glyphicon-off"></span> Create Account</button>
	          </form>
	        </div>
	        <div class="modal-footer">
	          <button type="submit" class="btn btn-default btn-default pull-left espanyol" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cerrar</button>
			  <button type="submit" class="btn btn-default btn-default pull-left ingles" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
	        </div>
	      </div>
	    </div>
	  </div> 
<!-- ./register modal -->

    <!-- Header -->
    <a name="about"></a>
    <div class="intro-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-message">
                        <h1>MusLearn</h1>
                        <h3><p class="espanyol">Aprendizaje de idiomas con videos musicales</p></h3>
						<h3><p class="ingles">Language learning with musical videos</p></h3>
                        <hr class="intro-divider">
                        <ul class="list-inline intro-social-buttons">
                            <li>
                                <a href="https://github.com/semoal/MusLearn" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
                            </li>
                            <li>
                                <a href="#" class="btn btn-default btn-lg espanyol"><i class="fa fa-windows fa-fw"></i> <span class="network-name">Descargar</span></a>
								<a href="#" class="btn btn-default btn-lg ingles"><i class="fa fa-windows fa-fw"></i> <span class="network-name">Download</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Page Content -->

	<a  name="services"></a>
    <div class="content-section-a">

        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading"><p class="espanyol">Podrás acceder con tu cuenta web</p></h2>
					<h2 class="section-heading"><p class="ingles">You can access with your web account</p></h2>
                    <p class="lead espanyol">Podrás consultar tus últimas busquedas y el ranking global en la web.</p>
					<p class="lead ingles">You can read your last searches and the global ranking in the web. </p>
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                    <img class="img-responsive" src="img/login.png" alt="">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-a -->

    <div class="content-section-b">

        <div class="container">

            <div class="row">
                <div class="col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading espanyol">Ver las letras de tus videos favoritos</h2>
					<h2 class="section-heading ingles">See the lyrics of your favourite videos</h2>
                    <p class="lead espanyol">Nuestra idea principal siempre ha sido aprender a la vez que divertirse. Podrás buscar canciones a partir de una url de youtube y te mostraremos el video y su correspondiente letra.</p>
					<p class="lead ingles">Our main idea has always been learning while having fun. You can search songs from a youtube url and we will show you the video and the corresponding lyrics.</p>
                </div>
                <div class="col-lg-5 col-sm-pull-6  col-sm-6">
                    <img class="img-responsive" src="img/main.png" alt="">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-b -->

    <div class="content-section-a">

        <div class="container">

            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading espanyol">Formar parte de nosotros</h2>
					<h2 class="section-heading ingles">Be part of us</h2>
                    <p class="lead espanyol"> Contamos con un servicio de introducción de letras. Los usuarios registrados
                    podrán subir en un ranking con premios mensuales a los más colaboradores</p>
					 <p class="lead ingles"> We have a lyrics input service. 
					 Registered users can be part of a ranking with monthly prizes to the most collaborating users.</p>
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                    <img class="img-responsive" src="img/anyadir.png" alt="">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>

    <!-- /.content-section-a -->

    <div class="content-section-b">

        <div class="container">

            <div class="row">
                <div class="col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading espanyol">Totalmente licencia abierta</h2>
					<h2 class="section-heading ingles">Open-source code</h2>
                    <p class="lead espanyol">Puedes editar el codigo, ayudarnos a desarollar, dar reportes de errores e incluso estudiarlo! <i style="font-size:75%">No lo robes, por fis</i></p>
					 <p class="lead ingles">You can edit the code, help us developing, report bugs and even study it! <i style="font-size:75%">Don't robberino, programmerino</i></p>
                </div>
                <div class="col-lg-5 col-sm-pull-6  col-sm-6">
                    <img class="img-responsive" src="img/github.png" alt="">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
	<a  name="contact"></a>
    <div class="banner">

        <div class="container">

            <div class="row">
                <div class="col-lg-6">
                </div>
                <div class="col-lg-6">
                    <ul class="list-inline banner-social-buttons">
                        <li>
                            <a href="#" class="btn btn-default btn-lg espanyol"><i class="fa fa-windows fa-fw"></i> <span class="network-name">Descarga</span></a>
							<a href="#" class="btn btn-default btn-lg ingles"><i class="fa fa-windows fa-fw"></i> <span class="network-name">Download</span></a>
                        </li>
                        <li>
                            <a href="https://github.com/semoal/MusLearn" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
        <!-- /.container -->

		
    </div>
    <!-- /.banner -->

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="list-inline">
                        <li>
                            <a href="#"><p class="espanyol">Inicio</p><p class="ingles">Home</p></a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="about.html"><p class="espanyol">Sobre nosotros</p><p class="ingles">About us</p></a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
							<a href="services.html"><p class="espanyol">¿Qué es?</p><p class="ingles">About MusLearn</p></a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a data-toggle="modal" href="#loginModal"><p class="espanyol">Accede</p><p class="ingles">Log in/Register</p></a>
                        </li>
                    </ul>
                    <p class="copyright text-muted small espanyol">Copyright &copy; MusLearn 2017. Todos los derechos reservados</p>
					<p class="copyright text-muted small ingles">Copyright &copy; MusLearn 2017. All Rights Reserved</p>
                </div>
            </div>
        </div>
    </footer>

<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>

</html>