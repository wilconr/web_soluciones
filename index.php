<?php
include "enviar.php" ;

$error = ""; $mensajeExito  ="";

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$asunto = $_POST['asunto'];
$mensajeC = $_POST['mensaje'];
$contenido = "Este mensaje fue enviado por: " . $nombre . "<br>Asunto: " . $asunto . "<br>Su e-mail es: " . $email . "<br>Teléfono: " . $telefono . "<br>Mensaje: " . $mensajeC . "<br>Enviado el " . date('d/m/Y', time());

if ($_POST) {
  if ($_POST['email'] && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) === false) {
    $error = '<div class="alert alert-danger" role="alert"><p><strong>Mensaje no pudo ser enviado, error email no valido :( </div>';
  }
  if ($error != "") {
    $error = '<div class="alert alert-danger" role="alert"><p><b>Se genero un error:</b></p>' . $error . '</div>';
  }

  else{
      sendMail($_POST['email'],'qwerty.870403@gmail.com', $contenido, $_POST['asunto']);
      $mensajeExito = '<div class="alert alert-success" role="alert">Mensaje enviado con exito :) </div>';
      header('location:index.php');
    }
}

?>

    <!DOCTYPE html>
    <html lang="es">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="keywords" content="">
        <meta name="description" content="">

        <!-- Site title
   ================================================== -->
        <title>Soluciones é Ingenieria</title>

        <meta name="description" content="ofrecemos servicos tecnologicos con experiencia y profesionalismo en seguridad electronica como son: intalacion de circuitos cerrados de televison, cercas electricas, desarrollo de sitios web, alarmas de seguridad, mantenimiento y reparacion de equipos de computo, controles de acceso, camaras de vigilancia y redes de datos">

        <!-- Bootstrap CSS
   ================================================== -->
        <link rel="stylesheet" href="css/bootstrap.min.css">

        <!-- Animate CSS
   ================================================== -->
        <link rel="stylesheet" href="css/animate.css">

        <!-- Font Icons CSS
   ================================================== -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/et-line-font.css">

        <!-- Nivo Lightbox CSS
   ================================================== -->
        <link rel="stylesheet" href="css/nivo-lightbox.css">
        <link rel="stylesheet" href="css/nivo_themes/default/default.css">

        <!-- Owl Carousel CSS
   ================================================== -->
        <link rel="stylesheet" href="css/owl.theme.css">
        <link rel="stylesheet" href="css/owl.carousel.css">

        <!-- Main CSS
   ================================================== -->
        <link rel="stylesheet" href="css/style.css">

        <!-- Google web font
   ================================================== -->
        <link href='https://fonts.googleapis.com/css?family=Oxygen:400,700' rel='stylesheet' type='text/css'>

    </head>

    <body data-spy="scroll" data-target=".navbar-collapse" data-offset="50">


        <!-- Preloader section
================================================== -->
        <div class="preloader">

            <div class="sk-spinner sk-spinner-pulse"></div>

        </div>


        <!-- Home section
================================================== -->
        <section id="home" class="parallax-section">
            <div class="container">
                <div class="row">

                    <div class="col-md-offset-2 col-md-8 col-sm-12">
                        <h2 class="wow bounceIn">Soluciones é Ingenieria</h2>
                        <h4 class="font-weight-normal font-color-gray wow fadeInUp" data-wow-delay="1s">ofrecemos servicos tecnologicos con experiencia y profesionalismo en seguridad electronica como son: instalacion de circuitos cerrados de televison, cercas electricas, desarrollo de sitios web, alarmas de seguridad, mantenimiento y reparacion de equipos de computo, controles de acceso, camaras de vigilancia y redes de datos.</h4>
                        <a href="#service" class="btn btn-default section-btn smoothScroll wow fadeInUp" data-wow-delay="1.9s">LEER MÁS...</a>
                        <a href="#contact" class="btn btn-warning section-btn smoothScroll hidden-xs wow fadeInUp" data-wow-delay="1.9s">CONTÁCTANOS!</a>
                    </div>

                </div>
            </div>
        </section>


        <!-- Navigation section
================================================== -->
        <div class="navbar navbar-default navbar-static-top" role="navigation">
            <div class="container">

                <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
			</button>
                    <a href="#" class="navbar-brand">S é I</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#home" class="smoothScroll">INICIO</a></li>
                        <li><a href="#service" class="smoothScroll">SERVICIOS</a></li>
                        <li><a href="#about">NOSOTROS</a></li>
                        <li><a href="#team" class="smoothScroll">EQUIPO</a></li>
                        <li><a href="#portfolio" class="smoothScroll">PORTAFOLIO</a></li>
                        <!-- <li><a href="#blog" class="smoothScroll">BLOG</a></li> -->
                        <li><a href="#contact" class="smoothScroll">CONTACTO</a></li>
                        <li><a href="http://www.solucioneseingenieria.com:2095/" class="smoothScroll" target="none">CORREO</a></li>
                    </ul>
                </div>

            </div>
        </div>


        <!-- Service section
================================================== -->
        <section id="service" class="parallax-section">
            <div class="container">
                <div class="row">

                    <div class="col-md-8 col-sm-10">
                        <div class="section-title">
                            <h1>Nuestro Trabajo</h1>
                            <p>Somos un equipo capacitado para entregar a nuestros cliente el mejor servicio.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.9s">
                        <div class="media">
                            <div class="media-object pull-left">
                                <i class="icon icon-laptop"></i>
                            </div>
                            <div class="media-body">
                                <h3 class="media-heading">Mantenimiento de computadores</h3>
                                <p>* Mantenimiento preventivo y correctivo, reparacion de computadores de escritorio y portatiles. <br> * Redes de oficina y hogar. <br> * Equipos de Seguridad Electronica. <br> * Actualizacion de Software y Sistemas Operativos.
                                    <br> * Diagnostico de equipos de computo. <br> * Servicio a domicilio..</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="1.3s">
                        <div class="media">
                            <div class="media-object pull-left">
                                <i class="icon icon-focus"></i>
                            </div>
                            <div class="media-body">
                                <h3 class="media-heading">Diseño Web</h3>
                                <p>* Diseño web a medida de cliente. <br> * Paginas web estaticas. <br> * Paginas web dinamicas. <br> * Soporte tecnico y asesoria. <br> * Alojamiento web. <br> * Venta de dominios. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="1.6s">
                        <div class="media">
                            <div class="media-object pull-left">
                                <i class="icon icon-cloud"></i>
                            </div>
                            <div class="media-body">
                                <h3 class="media-heading">Seguridad Electronica</h3>
                                <p> * Alarmas gsm <br> * Detectores de Metal. <br> * Camaras de seguridad analogas y digitales. <br> * DVR,NVR,Monitores,Control de Rondas. <br> * Control de Acceso. <br> * Cercas electricas.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="1.9s">
                        <div class="media">
                            <div class="media-object pull-left">
                                <i class="icon icon-basket"></i>
                            </div>
                            <div class="media-body">
                                <h3 class="media-heading">Venta é Instalacion de Equipos</h3>
                                <p>* Equipos de computo y Redes
                                    <br> * Control de horarios para oficinas.
                                    <br> * Software: Antivirus,Licencias de Windows,Office.
                                    <br> * Venta de UPS, Estabilizadores.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <!-- about section
================================================== -->
        <section id="about" class="parallax-section">
            <div class="container">
                <div class="row">

                    <div class="col-md-6 col-sm-10 wow fadeInUp" data-wow-delay="1.3s">
                        <h1>Acerca de Nosotros...</h1>
                        <p>Somos una empresa Santandereana dinámica, flexible, que nos adaptamos al cambio, nuestra experiencia en el área de la tecnología y seguridad privada nos brindó los ingredientes adecuados para prestar servicios ajustados a las necesidades de los clientes. La innovación es una de nuestras preocupaciones, con un equipo humano comprometido y altamente profesional, aportando al crecimiento económico, equilibrio ecológico, progreso social y Experiencia en el campo profesional, brindando oportunidades de desarrollo profesional.</p>
                    </div>

                    <div class="col-md-6 col-sm-10 wow fadeInUp" data-wow-delay="1.3s">
                        <h1>Politicas de Calidad</h1>
                        <p>Lograr la satisfacción total de nuestros clientes, mediante soluciones tecnológicas efectivas, realizando seguimiento y verificación al servicio prestado y proyectos finalizados. En el cumplimiento de nuestra Misión, observaremos las siguientes aptitudes para garantizar la satisfacción de nuestros clientes: Amabilidad en el servicio y Agilidad en los Procesos, Honestidad, Responsabilidad, Compromiso con cada proyecto emprendido, Innovación práctica y efectiva en los servicios y eficiencia en costos, Cumplimiento y mejora de las normas de calidad, Desarrollo Integral del personal de servicio técnico.</p>
                    </div>

                    <div class="col-md-6 col-sm-10 wow fadeInUp" data-wow-delay="1.6s">
                        <div class="embed-responsive embed-responsive-16by9">
                            <h1>Mision</h1>
                            <p>Ofrecer soluciones Integrales de Tecnología, en los ámbitos de Sistemas, seguridad electrónica, redes de telecomunicaciones, automatismos y web hosting para satisfacer las necesidades empresariales y particulares de nuestros clientes; con servicios innovadores, eficientes, efectivos y de alta calidad, garantizando la satisfacción total en cada proyecto realizado.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-10 wow fadeInUp" data-wow-delay="1.6s">
                        <div class="embed-responsive embed-responsive-16by9">
                            <h1>Vision</h1>
                            <p>Soluciones é Ingeniería en 2021 se consolidara como una de las empresas de servicios Tecnológicos más importantes del Territorio nacional cumpliendo con los estándares de Calidad, seguridad y cumplimiento; reconocida como modelo estructural y empresarial a seguir, con un equipo de trabajo sólido y comprometido.</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <!-- team section
================================================== -->
        <section id="team" class="paralla-section">
            <div class="container">
                <div class="row">

                    <!-- Section title
			================================================== -->
                    <div class="col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10 wow bounceIn">
                        <div class="section-title">
                            <h1>Equipo de Trabajo</h1>
                            <p>Nuestro personal a su entera disposicion.</p>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.9s">
                        <div class="team-wrapper">
                            <img src="images/team_1.jpg" class="img-responsive" alt="about">
                            <div class="team-wrapper-social">
                                <ul class="social-icon">
                                    <li>
                                        <a href="#" class="fa fa-facebook wow fadeIn" data-wow-delay="0.9s"></a>
                                    </li>
                                    <li>
                                        <a href="#" class="fa fa-twitter wow fadeIn" data-wow-delay="0.9s"></a>
                                    </li>
                                    <li>
                                        <a href="#" class="fa fa-dribbble wow fadeIn" data-wow-delay="0.9s"></a>
                                    </li>
                                    <li>
                                        <a href="#" class="fa fa-behance wow fadeIn" data-wow-delay="0.9s"></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-description">
                            <h3>Johnathan Doe</h3>
                            <h5>Designer</h5>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="1.3s">
                        <div class="team-wrapper">
                            <img src="images/team_2.jpg" class="img-responsive" alt="about">
                            <div class="team-wrapper-social">
                                <ul class="social-icon">
                                    <li>
                                        <a href="#" class="fa fa-facebook wow fadeIn" data-wow-delay="0.9s"></a>
                                    </li>
                                    <li>
                                        <a href="#" class="fa fa-twitter wow fadeIn" data-wow-delay="0.9s"></a>
                                    </li>
                                    <li>
                                        <a href="#" class="fa fa-dribbble wow fadeIn" data-wow-delay="0.9s"></a>
                                    </li>
                                    <li>
                                        <a href="#" class="fa fa-behance wow fadeIn" data-wow-delay="0.9s"></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-description">
                            <h3>Jenny L Martian</h3>
                            <h5>UX Designer</h5>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="1.6s">
                        <div class="team-wrapper">
                            <img src="images/team_3.jpg" class="img-responsive" alt="about">
                            <div class="team-wrapper-social">
                                <ul class="social-icon">
                                    <li>
                                        <a href="#" class="fa fa-facebook wow fadeIn" data-wow-delay="0.9s"></a>
                                    </li>
                                    <li>
                                        <a href="#" class="fa fa-twitter wow fadeIn" data-wow-delay="0.9s"></a>
                                    </li>
                                    <li>
                                        <a href="#" class="fa fa-dribbble wow fadeIn" data-wow-delay="0.9s"></a>
                                    </li>
                                    <li>
                                        <a href="#" class="fa fa-behance wow fadeIn" data-wow-delay="0.9s"></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-description">
                            <h3>James David Doe</h3>
                            <h5>Creative Director</h5>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <!-- portfolio section
================================================== -->
        <section id="portfolio" class="parallax-section">
            <div class="container">
                <div class="row">

                    <!-- Section title
			================================================== -->
                    <div class="col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10 wow bounceIn text-center">
                        <div class="section-title">
                            <h1>Ultimos Trabajos</h1>
                            <p>Mira nuestro portafolia de trabajo.</p>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.9s">
                        <div class="portfolio-thumb">
                            <a href="images/portfolio-img1.jpg" data-lightbox-gallery="portfolio-gallery">
                                <img src="images/portfolio-img1.jpg" class="fluid-img" alt="portfolio img">
                                <div class="portfolio-overlay">
                                    <div class="portfolio-overlay-des">
                                        <i class="fa fa-link"></i>
                                        <h3>Cercas Electricas</h3>
                                        <h5>Conjuntos / Casas / Zonas Seguras</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.9s">
                        <div class="portfolio-thumb">
                            <a href="images/portfolio-img2.jpg" data-lightbox-gallery="portfolio-gallery">
                                <img src="images/portfolio-img2.jpg" class="fluid-img" alt="portfolio img">
                                <div class="portfolio-overlay">
                                    <div class="portfolio-overlay-des">
                                        <i class="fa fa-link"></i>
                                        <h3>CCTV</h3>
                                        <h5>Camaras de Seguridad / DVR / NVR</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.9s">
                        <div class="portfolio-thumb">
                            <a href="images/portfolio-img3.jpg" data-lightbox-gallery="portfolio-gallery">
                                <img src="images/portfolio-img3.jpg" class="fluid-img" alt="portfolio img">
                                <div class="portfolio-overlay">
                                    <div class="portfolio-overlay-des">
                                        <i class="fa fa-link"></i>
                                        <h3>Alarmas</h3>
                                        <h5>Gsm / Alambricas / Inalambricas</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.9s">
                        <div class="portfolio-thumb">
                            <a href="images/portfolio-img4.jpg" data-lightbox-gallery="portfolio-gallery">
                                <img src="images/portfolio-img4.jpg" class="fluid-img" alt="portfolio img">
                                <div class="portfolio-overlay">
                                    <div class="portfolio-overlay-des">
                                        <i class="fa fa-link"></i>
                                        <h3>Reparacion de Computadores</h3>
                                        <h5>Mantenimiento / Mejoras / Venta de Repuestos</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.9s">
                        <div class="portfolio-thumb">
                            <a href="images/portfolio-img5.jpg" data-lightbox-gallery="portfolio-gallery">
                                <img src="images/portfolio-img5.jpg" class="fluid-img" alt="portfolio img">
                                <div class="portfolio-overlay">
                                    <div class="portfolio-overlay-des">
                                        <i class="fa fa-link"></i>
                                        <h3>Control de Acceso</h3>
                                        <h5>Automatizacion / Biometria / Seguridad</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.9s">
                        <div class="portfolio-thumb">
                            <a href="images/portfolio-img6.jpg" data-lightbox-gallery="portfolio-gallery">
                                <img src="images/portfolio-img6.jpg" class="fluid-img" alt="portfolio img">
                                <div class="portfolio-overlay">
                                    <div class="portfolio-overlay-des">
                                        <i class="fa fa-link"></i>
                                        <h3>Redes de Datos</h3>
                                        <h5>Diseño / Cableado / Inalambrico</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <!-- blog section
================================================== -->
        <!-- <section id="blog" class="parallax-section">
            <div class="container">
                <div class="row"> -->

        <!-- Section title
			================================================== -->
        <!-- <div class="col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10 wow bounceIn text-center">
                        <div class="section-title">
                            <h1>Nuestro Blog</h1>
                            <p>Aca podras ver nuestros nuevos montajes y clientes satisfecho con nuestro trabajo.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0.9s">
                        <div class="blog-wrapper">
                            <span class="blog-date">Online Business / Dec 9, 2016</span>
                            <h3 class="blog-title"><a href="blog-single.html">The best way to make Online Business</a></h3>
                            <h5 id="blog-author">by Johnathan Doe</h5>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="1.3s">
                        <div class="blog-wrapper">
                            <span class="blog-date">Frontend Dev / Dec 9, 2016</span>
                            <h3 class="blog-title"><a href="blog-single.html">Frontend Developer Vs UI Designer</a></h3>
                            <h5 id="blog-author">by Johnny James</h5>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="1.6s">
                        <div class="blog-wrapper">
                            <span class="blog-date">Social Marketing / Dec 9, 2016</span>
                            <h3 class="blog-title"><a href="blog-single.html">What is Social Marketing Business</a></h3>
                            <h5 id="blog-author">by Mary Louis</h5>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="1.9s">
                        <div class="blog-wrapper">
                            <span class="blog-date">Web Design / Dec 9, 2016</span>
                            <h3 class="blog-title"><a href="blog-single.html">How to become Web Designer</a></h3>
                            <h5 id="blog-author">by David Jenn</h5>
                        </div>
                    </div>

                </div>
            </div>
        </section> -->


        <!-- Faq section
================================================== -->
        <section id="faq" class="parallax-section">
            <div class="container">
                <div class="row">

                    <!-- Section title
			================================================== -->
                    <div class="col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10 wow bounceIn text-center">
                        <div class="section-title">
                            <h1>Preguntas Solicitadas</h1>
                            <p>Envianos tus preguntas atravez del formulario de contacto y te las responderemos.</p>
                        </div>
                    </div>

                    <div class="col-md-offset-1 col-md-10 col-sm-12 wow fadeInUp" data-wow-delay="0.9s">
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <i class="icon icon-laptop"></i> How to make Brand Identity?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="panel-body">
                                        <p>Lorem ipsum dolor sit amet, maecenas eget vestibulum justo imperdiet, wisi risus purus augue vulputate voluptate neque, curabitur dolor libero sodales vitae elit massa. Lorem ipsum dolor sit amet, maecenas eget vestibulum justo imperdiet.</p>
                                        <p>Lorem ipsum dolor sit amet, maecenas eget vestibulum justo imperdiet.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingTwo">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                            <i class="icon icon-focus"></i> What is Web Design?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                    <div class="panel-body">
                                        <p>Lorem ipsum dolor sit amet, maecenas eget vestibulum justo imperdiet, wisi risus purus augue vulputate voluptate neque, curabitur dolor libero sodales vitae elit massa. Lorem ipsum dolor sit amet, maecenas eget vestibulum justo imperdiet.</p>
                                        <p>Lorem ipsum dolor sit amet, maecenas eget vestibulum justo imperdiet.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingThree">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                            <i class="icon icon-cloud"></i> Why Important Social Marketing?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                    <div class="panel-body">
                                        <p>Lorem ipsum dolor sit amet, maecenas eget vestibulum justo imperdiet, wisi risus purus augue vulputate voluptate neque, curabitur dolor libero sodales vitae elit massa. Lorem ipsum dolor sit amet, maecenas eget vestibulum justo imperdiet.</p>
                                        <p>Lorem ipsum dolor sit amet, maecenas eget vestibulum justo imperdiet.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>


        <!-- testimonial section
================================================== -->
        <section id="testimonial" class="parallax-section">
            <div class="container">
                <div class="row">

                    <!-- Section title
			================================================== -->
                    <div class="col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10 wow bounceIn text-center">
                        <div class="section-title">
                            <h1>Testimonial Words</h1>
                            <p>Lorem ipsum dolor sit amet, maecenas eget vestibulum justo imperdiet.</p>
                        </div>
                    </div>

                    <!-- Work Owl Carousel section
			================================================== -->
                    <div id="owl-testimonial" class="owl-carousel">

                        <div class="item col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.9s">
                            <div class="media">
                                <div class="media-object pull-left">
                                    <img src="images/testimonial-img1.jpg" class="img-responsive" alt="testimonial">
                                </div>
                                <div class="media-body">
                                    <p>Lorem ipsum dolor sit amet, maecenas eget vestibulum justo imperdiet, wisi risus purus augue vulputate voluptate neque, curabitur dolor libero sodales vitae elit massa. Lorem ipsum dolor sit amet</p>
                                    <h4 class="media-heading">Johnathan Doe</h4>
                                </div>
                            </div>
                        </div>
                        <div class="item col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.9s">
                            <div class="media">
                                <div class="media-object pull-left">
                                    <img src="images/testimonial-img2.jpg" class="img-responsive" alt="testimonial">
                                </div>
                                <div class="media-body">
                                    <p>Lorem ipsum dolor sit amet, maecenas eget vestibulum justo imperdiet, wisi risus purus augue vulputate voluptate neque, curabitur dolor libero sodales vitae elit massa. Lorem ipsum dolor sit amet, maecenas eget vestibulum justo imperdiet</p>
                                    <h4 class="media-heading">Johny David</h4>
                                </div>
                            </div>
                        </div>
                        <div class="item col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.9s">
                            <div class="media">
                                <div class="media-object pull-left">
                                    <img src="images/testimonial-img3.jpg" class="img-responsive" alt="testimonial">
                                </div>
                                <div class="media-body">
                                    <p>Lorem ipsum dolor sit amet, maecenas eget vestibulum justo imperdiet, wisi risus purus augue vulputate voluptate neque, curabitur dolor libero sodales vitae elit massa. Lorem ipsum dolor sit amet, maecenas eget vestibulum justo imperdiet</p>
                                    <h4 class="media-heading">James Author</h4>
                                </div>
                            </div>
                        </div>
                        <div class="item col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.9s">
                            <div class="media">
                                <div class="media-object pull-left">
                                    <img src="images/testimonial-img1.jpg" class="img-responsive" alt="testimonial">
                                </div>
                                <div class="media-body">
                                    <p>Lorem ipsum dolor sit amet, maecenas eget vestibulum justo imperdiet, wisi risus purus augue vulputate voluptate neque, curabitur dolor libero sodales vitae elit massa. Lorem ipsum dolor sit amet, maecenas eget vestibulum justo imperdiet</p>
                                    <h4 class="media-heading">John Doe</h4>
                                </div>
                            </div>
                        </div>
                        <div class="item col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.9s">
                            <div class="media">
                                <div class="media-object pull-left">
                                    <img src="images/testimonial-img2.jpg" class="img-responsive" alt="testimonial">
                                </div>
                                <div class="media-body">
                                    <p>Lorem ipsum dolor sit amet, maecenas eget vestibulum justo imperdiet, wisi risus purus augue vulputate voluptate neque, curabitur dolor libero sodales vitae elit massa. Lorem ipsum dolor sit amet, maecenas eget vestibulum justo imperdiet</p>
                                    <h4 class="media-heading">Jennie Louis</h4>
                                </div>
                            </div>
                        </div>


                    </div>

                </div>
            </div>
        </section>

        <!-- Map section
================================================== -->

        <section id="map" class="parallax-section">
            <div class="container">
                <div class="row">

                    <!-- Section title
        ================================================== -->
                    <div class="col-md-offset-2 col-md-8 col-sm-12">
                        <div class="section-title">
                            <h1>Ubicanos</h1>
                            <p>Nuetsras oficinas en piedecuesta.</p>
                        </div>
                    </div>
                    <!-- Map form section
            ================================================== -->
                    <iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.1159786333474!2d-73.05650868597873!3d6.995619994946513!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e6847083884a62f%3A0xa12ccda841caab61!2sSoluciones+%C3%A9+Ingenier%C3%ADa!5e0!3m2!1sen!2sco!4v1504758262565" width="100%" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>


                </div>
            </div>
        </section>
        <!-- Contact section
================================================== -->
        <section id="contact" class="parallax-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-offset-2 col-md-8 col-sm-12">
                        <div>
                            <?php echo $error.$mensajeExito; ?>
                        </div>
                    </div>

                    <!-- Section title
			================================================== -->
                    <div class="col-md-offset-2 col-md-8 col-sm-12">
                        <div class="section-title">
                            <h1>Estamos En Contacto</h1>
                            <p>Es para nosotros importante saber sus opiniones escribanos sus inquietudes.</p>
                        </div>
                    </div>




                    <!-- Contact form section
            ================================================== -->


                    <div class="col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10 wow fadeIn" data-wow-delay="0.6s">

                        <form method="post" id="formulario_contacto" onsubmit="validaForm(); return false;">
                            <div class="col-md-6 col-sm-6">
                                <input type="text" class="form-control" placeholder="Nombre" name="nombre" id="nombre" required>
                                <input type="email" class="form-control" placeholder="E-Mail" name="email" id="email" required>
                                <input type="telephone" class="form-control" placeholder="Telefono" name="telefono" id="telefono" required>
                                <input type="text" class="form-control" placeholder="Asunto" name="asunto" id="asunto" required>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <textarea class="form-control" placeholder="Mensaje" rows="7" name="mensaje" id="mensaje" required></textarea>
                            </div>
                            <div class="col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8">
                                <input type="submit" class="form-control" value="ENVIAR MENSAJE">
                            </div>
                        </form>

                    </div>

                </div>

            </div>

        </section>



        <section class="limpia"></section>

        <!-- Footer section
================================================== -->
        <footer>
            <div class="container">
                <div class="row">

                    <div class="col-md-12 col-sm-12 wow fadeInUp" data-wow-delay="1s">
                        <p>Copyright © Soluciones é Ingenieria | Todos Los Derechos Reservados.</p>
                        <ul class="social-icon">
                            <li>
                                <a href="#" class="fa fa-facebook wow fadeIn" data-wow-delay="0.9s"></a>
                            </li>
                            <li>
                                <a href="#" class="fa fa-twitter wow fadeIn" data-wow-delay="0.9s"></a>
                            </li>
                            <li>
                                <a href="#" class="fa fa-map-marker wow fadeIn" data-wow-delay="0.9s"></a>
                            </li>
                            <li>
                                <h4>Dirección:</h4>Av. San Francisco #653
                            </li>
                            <li>
                                <a href="#" class="fa fa-behance wow fadeIn" data-wow-delay="0.9s"></a>
                            </li>
                            <li>
                                <a href="#" class="fa fa-github wow fadeIn" data-wow-delay="0.9s"></a>
                            </li>
                            <li>
                                <a href="#" class="fa fa-google-plus wow fadeIn" data-wow-delay="0.9s"></a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </footer>


        <!-- Javascript
================================================== -->

        <script type="text/javascript">
            function validaForm() {
                erro = false;

                if (!erro) {
                    $('#formulario_contacto').submit();
                }
            }

        </script>

        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/jquery.backstretch.min.js"></script>
        <script src="js/jquery.parallax.js"></script>
        <script src="js/nivo-lightbox.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/smooth-scroll.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/custom.js"></script>
        <script>
          var scroll = new SmoothScroll('a[href*="#"]', {
          // Selectors
          ignore: '[data-scroll-ignore]', // Selector for links to ignore (must be a valid CSS selector)
          header: null, // Selector for fixed headers (must be a valid CSS selector)

          // Speed & Easing
          speed: 500, // Integer. How fast to complete the scroll in milliseconds
          offset: 0, // Integer or Function returning an integer. How far to offset the scrolling anchor location in pixels
          easing: 'easeInOutCubic', // Easing pattern to use
          customEasing: function (time) {

            // Function. Custom easing pattern
            // If this is set to anything other than null, will override the easing option above

            // return <your formulate with time as a multiplier>

            // Example: easeInOut Quad
            return time < 0.5 ? 2 * time * time : -1 + (4 - 2 * time) * time;

          },

          // Callback API
          before: function (anchor, toggle) {}, // Callback to run before scroll
          after: function (anchor, toggle) {} // Callback to run after scroll
          });
        </script>

    </body>

    </html>
