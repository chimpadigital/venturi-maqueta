<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
	  <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>Venturi Hnos. | Oleohidráulica</title>

    <meta name="author" content="themesflat.com">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Bootstrap  -->
    <link rel="stylesheet" type="text/css" href="stylesheets/bootstrap.min.css" >

    <!-- Style -->
    <link rel="stylesheet" type="text/css" href="stylesheets/style.css">

    <!-- Responsive -->
    <link rel="stylesheet" type="text/css" href="stylesheets/responsive.css">

    <!-- Colors -->
    <link rel="stylesheet" type="text/css" href="stylesheets/colors/color1.css" id="colors">

    <!-- Animation Style -->
    <link rel="stylesheet" type="text/css" href="stylesheets/animate.css">

    <!-- Favicon and touch icons  -->
    <link href="image/favicon/favicon.png" rel="apple-touch-icon-precomposed" sizes="48x48">
    <link href="image/favicon/favicon.png" rel="apple-touch-icon-precomposed">
    <link href="image/favicon/favicon.png" rel="shortcut icon">

    <!-- Slider Revolution CSS Files -->
    <link rel="stylesheet" type="text/css" href="rev-slider/css/settings.css">
    <link rel="stylesheet" type="text/css" href="rev-slider/css/layers.css">
    <link rel="stylesheet" type="text/css" href="rev-slider/css/navigation.css">
</head>
<body>
<div class="preloader">
    <div class="main-loader">
        <span class="loader1"></span>
        <span class="loader2"></span>
        <span class="loader3"></span>
    </div>
</div>

<div class="header-wrap-inner style1">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="header-top clearfix">
                    <div class="header-top-logo">
                        <a id="logo" href="index.php"><img src="image/navbar/logo-b.svg" alt="Dustri"></a>
                         <!-- <ul>
                             <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                             <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                             <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                             <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                         </ul> -->
                    </div>
                    <div class="header-top-info">
                        <ul>
                            <li class="email">
                                <div class="header-image">
                                    <img src="image/navbar/mail.svg" alt="image">                                    
                                </div>
                                <div class="header-text">
                                    <h4><a href="index.html">EMAIL</a></h4>
                                    <h5><a href="index.html">info@venturi.com.ar</a></h5>
                                </div>
                            </li>
                            <li class="phone">
                                <div class="header-image">
                                    <img src="image/navbar/telefono.svg" alt="image">
                                </div>
                                <div class="header-text">
                                    <h4><a href="index.html">TELÉFONO</a></h4>
                                    <h5><a href="index.html">(00-54-351) 4962030/1262</a></h5>
                                </div>
                            </li>
                            <li class="visit">
                                <div class="header-image">
                                    <img src="image/navbar/direccion.svg" alt="image">
                                </div>
                                <div class="header-text">
                                    <h4><a href="index.html">DIRECCIÓN</a></h4>
                                    <h5><a href="index.html">Camino a Monte Cristo Km. 4.5</a></h5>
                                </div>
                            </li>
                            <li class="visit">
                                 <div class="header-image">
                                    <img src="image/navbar/spanish.svg" alt="image">
                                </div>
                                <div class="header-text">
                                    <h4><a href="index.html">IDIOMA</a></h4>
                                    
                                    <div class="top-bar-language clearfix">
                                        <div class="wrap-language">
                                            <div class="language-name header-image">
                                                
                                                <!-- <img src="image/blog/flag.png" alt="image"> -->
                                                <span>Español</span>
                                            </div>
                                            <ul class="select-name">
                                                <li>
                                                    <a href="#nl"><img src="image/navbar/flag.png" alt="image">English
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#en"><img src="image/navbar/spanish.svg" alt="image">Español</a>
                                                </li>
                                            </ul>
                                        </div><!-- wrap-language -->
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<header class="style1" id="header">
    <div id="site-header">
       <div class="container">
            <div class="row-desk">
                <div class="col-lg-12">
                    <div class="header-wrap">
                        <div class="mobile-button">
                            <span></span>
                        </div>
                        <div class="nav-wrap ">
                            <nav id="mainnav" class="mainnav">
                                <ul class="menu">
                                    <li class="logo-sticky ">
                                        <div class="header-top-logo d-none d-lg-block d-md-block">
                                            <a id="logo" href="index.php"><img src="image/navbar/logo-sticky.svg" alt="Venturi hnos" ></a>
                                        </div>
                                        
                                    </li>
                                    <li class="<?php if($currentPage =='inicio'){echo 'active';}?>">
                                        <a href="index.php" title="">Inicio</a>
                                        
                                    </li>
                                    <li class="<?php if($currentPage =='empresa'){echo 'active';}?>"> 
                                         <a href="empresa.php" title="">Empresa</a>
                                           
                                    </li>
                                    <li class="<?php if($currentPage =='servicios'){echo 'active';}?>">
                                        <a href="servicios.php" title="">Servicios</a>
                                        
                                    </li>
                                    <li class="<?php if($currentPage =='productos'){echo 'active';}?>">
                                        <a href="productos.php" title="">Productos <i class="fa fa-caret-down"></i></a>
                                        <ul class="sub-menu">
                                            <li><a href="bombas-hidraulicas-o-engranajes.php" title="">Bombas Hidráulicas o Engranajes</a></li>
                                            <li><a href="unidades-de-direccion.php" title="">Unidades de Dirección Hidrastáticas</a></li>
                                            <li><a href="motores-orbitales.php" title="">Motores Orbitales</a></li>
                                            <li><a href="valvulas-de-comando.php" title="">Válvulas de Comando </a></li>
                                            <li><a href="valvulas-de-control.php" title="">Válvulas de Control</a></li>
                                            <li><a href="cilindros-hidraulicos.php" title="">Cilindros Hidráulicos</a></li>
                                        </ul>
                                        <!-- /.sub-menu -->
                                    </li>
                                    <li class="<?php if($currentPage =='contacto'){echo 'active';}?>">
                                        <a href="contacto.php" title="">Red comercial - Contacto</a>
                                    </li>
                                </ul>
                            </nav>
                         </div><!-- /.nav-wrap -->
                         <div class="header-button d-none d-lg-block d-md-block"> 
                             <h3><a href="buscador.php" class="hvr-shutter-out-verticall">Buscador de productos <img src="image/navbar/search.svg" alt=""></a></h3>  
                        </div> 
                         <div class="header-button d-block d-lg-none d-md-none ml-3"> 
                             <h3 class="text-center"><a href="buscador.php" class="hvr-shutter-out-verticall">Buscador <img src="image/navbar/search.svg" alt=""></a></h3>  
                        </div> 
                    </div>
                </div>
            </div>
       </div>
    </div>
</header>