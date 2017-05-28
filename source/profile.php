<?php 
include('login2.php');
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
	    background: url('https://www.marshallheadphones.com/media/catalog/category/Marshall_Headphones_landing_banner__HOLIDAY._EXTENSION.jpg') no-repeat center center;
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
                <a class="navbar-brand topnav" href="../index.php">MusLearn</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#about">Sobre nosotros</a>
                    </li>
                    <li>
                        <a href="#services">¿Qué es?</a>
                    </li>
                    <li>
                        <a href="#contact">Ejemplos</a>
                    </li>
                    <li>
                        <a href="#login">Accede</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- ./navigation --> 

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="intro-message">
                    <?php 
					 $prep_stmt = "SELECT urlbusqueda FROM Busquedas b left join Usuarios u on u.idUsuario=b.idUsuario where u.idUsuario=?";
					$stmt = $mysqli->prepare($prep_stmt);
					if ($stmt) {
						$stmt->bind_param('s', $_SESSION['usr']);
						$stmt->execute();
						$stmt->bind_result($urlYoutube);
						while($stmt->fetch()){
							$videoBuena = str_replace("watch?v=","embed/",$urlYoutube);
							?>
							<iframe width="420" height="315"
							src=<?php echo $videoBuena?>>
							</iframe>
							<?php
						}
					}
					
					?>
					<h1> <?php echo $_SESSION['nombre'] ?> </h1>
				
                </div>
            </div>
        </div>
    </div>
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>
