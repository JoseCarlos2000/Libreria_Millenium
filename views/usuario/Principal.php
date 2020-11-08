<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Bootshop online Shopping cart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

	
<!-- Bootstrap style --> 
    <link id="callCss" rel="stylesheet" href="css/MenuPrincipal/themes/bootshop/bootstrap.min.css" media="screen"/>
    <link href="css/MenuPrincipal/themes/css/base.css" rel="stylesheet" media="screen"/>
    <script type="text/javascript" src="css/js/ajax.js"></script>
<!-- Bootstrap style responsive -->	
	<link href="css/MenuPrincipal/themes/css/bootstrap-responsive.min.css" rel="stylesheet"/>
	<link href="css/MenuPrincipal/themes/css/font-awesome.css" rel="stylesheet" type="text/css">
<!-- Google-code-prettify -->	
	<link href="css/MenuPrincipal/themes/js/google-code-prettify/prettify.css" rel="stylesheet"/>
<!-- fav and touch icons -->
    <link rel="shortcut icon" href="css/MenuPrincipal/themes/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="css/MenuPrincipal/themes/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="css/MenuPrincipal/themes/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="css/MenuPrincipal/themes/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="css/MenuPrincipal/themes/images/ico/apple-touch-icon-57-precomposed.png">
	<style type="text/css" id="enject"></style>
  </head>
<body>
<?php
session_start();
if(isset($_SESSION["carrito"]))
{
    $carrito=$_SESSION["carrito"];
}
else
{
    $carrito=array();
}
?>
<div id="header">
<div class="container">
<div id="welcomeLine" class="row">
	<div class="span6">Bienvenido !<strong> Usuario</strong></div>
	<div class="span6">
	<div class="pull-right">
		
		<a><span class="btn btn-mini btn-primary"><i class="icon-shopping-cart icon-white"></i> <?=count($carrito)?> Productos en Carrito  </span> </a> 
	</div>
	</div>
</div>
<!-- Navbar ================================================== -->
<div id="logoArea" class="navbar">
<a id="smallScreen" data-target="#topMenu" data-toggle="collapse" class="btn btn-navbar">
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
</a>
  <div class="navbar-inner">
      <a class="brand"><img src="css/MenuPrincipal/themes/images/logolib.png" width="193px" height="80px"/></a>

    
  </div>
</div>
</div>
</div>
<!-- Header End====================================================================== -->
<div id="carouselBlk">
	<div id="myCarousel" class="carousel slide">
		<div class="carousel-inner">
		  <div class="item active">
		  <div class="container">
                      <a href="index.php?c=libro&a=MPrincipal"><img style="width:100%" src="css/MenuPrincipal/themes/images/carousel/6.png" alt="special offers"/></a>
			
		  </div>
		  </div>
		  <div class="item">
		  <div class="container">
			<a><img style="width:100%" src="css/MenuPrincipal/themes/images/carousel/1.png" alt=""/></a>
		  </div>
		  </div>
		  <div class="item">
		  <div class="container">
			<a><img src="css/MenuPrincipal/themes/images/carousel/2.png" alt=""/></a>			
		  </div>
		  </div>
		   <div class="item">
		   <div class="container">
			<a><img src="css/MenuPrincipal/themes/images/carousel/3.png" alt=""/></a>

		   
		  </div>
		  </div>
		   <div class="item">
		   <div class="container">
			<a><img src="css/MenuPrincipal/themes/images/carousel/4.png" alt=""/></a>

		  </div>
		  </div>
		   <div class="item">
		   <div class="container">
			<a><img src="css/MenuPrincipal/themes/images/carousel/5.png" alt=""/></a>

		  </div>
		  </div>
		</div>
		<a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
		<a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
	  </div> 
</div>
<div id="mainBody">
	<div class="container">
	<div class="row">
<!-- Sidebar ================================================== -->
	<div id="sidebar" class="span3">
		<div class="well well-small"><a id="myCart"><img src="css/MenuPrincipal/themes/images/ico-cart.png" alt="cart"><?=count($carrito)?> Productos en Carrito</a></div>
		<ul id="sideManu" class="nav nav-tabs nav-stacked">
			<li class="subMenu open"><a>Mantenimientos</a>
				<ul>
				<li><a class="active" href="index.php?c=cliente&a=buscarusuario"><i class="icon-chevron-right"></i>Usuario </a></li>
				<li><a href="index.php?c=libro&a=BuscarLibro"><i class="icon-chevron-right"></i>Libro</a></li>
				
				
				</ul>
			</li>
			<li class="subMenu"><a> Reportes </a>
			<ul style="display:none">
				<li><a href="index.php?c=cliente&a=ReportesdeUsuarios"><i class="icon-chevron-right"></i>Usuario</a></li>
				<li><a href="index.php?c=libro&a=ReportesLibros"><i class="icon-chevron-right"></i>Libro</a></li>												
												
				
			</li>
                        </ul>
			<li><a href="index.php?c=cliente&a=Login">Salir</a></li>
			
		
		<br/>
		 
		
			
	</div>
<!-- Sidebar end=============================================== -->
<form action="" name="fr">
		<div class="span9">		
			
			
		<h4>Nuestros Productos </h4>
			  <ul class="thumbnails">
                            
                                       <?php
                           
                              foreach ($data["libros"] as $dato)
                              {
                                  ?> 
                              <li class="span3">
				  <div class="thumbnail">
                 
                                               <a  href=""><img src="css/images/libros/<?=$dato["img"]?>"  height="160" width="160" alt="10"/></a>
					<div class="caption">
					  <h5><?=$dato["nombre"]?></h5>
                                            <p> 
						<?=$dato["nombreAutor"]?>
					  </p>

                                      <?php
                                      
                                      
                                     
                             
					 ?>
                                          <h4 style="text-align:center"> <a class="btn" href="index.php?c=libro&a=BusqLibroxId&id=<?=$dato["codLibro"]?>">Agregar<i class="icon-shopping-cart"></i></a><a> </a><a  class="btn btn-primary btn-agregar-libro">S/.<?=$dato["precio"]?></a></h4>
					</div>
                                               
				  </div>
				</li>
					 <?php
                              }
                                         ?>
            			  </ul>	

		</div>
</form>

		</div>
	</div>
</div>

<!-- Footer ================================================================== -->
	<div  id="footerSection">
	<div class="container">
<center><h5><br>Millenium By UCSS 2020</h5></center>
	</div><!-- Container End -->
	</div>
<!-- Placed at the end of the document so the pages load faster ============================================= -->
	<script src="css/MenuPrincipal/themes/js/jquery.js" type="text/javascript"></script>
	<script src="css/MenuPrincipal/themes/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="css/MenuPrincipal/themes/js/google-code-prettify/prettify.js"></script>
	
	<script src="css/MenuPrincipal/themes/js/bootshop.js"></script>
    <script src="css/MenuPrincipal/themes/js/jquery.lightbox-0.5.js"></script>
	
	<!-- Themes switcher section ============================================================================================= -->
<div id="secectionBox">
<link rel="stylesheet" href="css/MenuPrincipal/themes/switch/themeswitch.css" type="text/css" media="screen" />
<script src="css/MenuPrincipal/themes/switch/theamswitcher.js" type="text/javascript" charset="utf-8"></script>	
</div>
</body>
</html>