﻿<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Libreria Millenium</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
     <meta name="description" content="">
        <meta name="author" content="templatemo">

        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/templatemo-style.css" rel="stylesheet">
        <link rel="icon" href="assets/Books_icon-icons.com_76879.ico">
	
<!-- Bootstrap style --> 
    <link id="callCss" rel="stylesheet" href="css/MenuPrincipal/themes/bootshop/bootstrap.min.css" media="screen"/>
    <link href="css/MenuPrincipal/themes/css/base.css" rel="stylesheet" media="screen"/>
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
	<div class="span6">Bienvenido!<strong> Usuario</strong></div>
	<div class="span6">
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
    <a class="brand" href="index.php?c=libro&a=MPrincipal"><img src="css/MenuPrincipal/themes/images/logolib.png" width="193px" height="80px"/></a>


  </div>
</div>
</div>
</div>
<!-- Header End====================================================================== -->
<div id="mainBody">
	<div class="container">
	<div class="row">
<!-- Sidebar ================================================== -->	<div id="sidebar" class="span3">
		<div class="well well-small"><a id="myCart"><img src="css/MenuPrincipal/themes/images/ico-cart.png" alt="cart"><?=count($carrito)?> Productos en Carrito</a></div>
		<ul id="sideManu" class="nav nav-tabs nav-stacked">
                        <li class="subMenu"><a>Libro</a>
				<ul>
				
                                <li><a href="index.php?c=libro&a=BuscarLibro"><i class="icon-chevron-right"></i>Buscar</a></li>
                                <li><a href="index.php?c=libro&a=NuevoLibro" class="active" href=""><i class="icon-chevron-right"></i>Registrar </a></li>
				
				
				</ul>
			</li>
                         <li class="subMenu open"><a>Usuario</a>
                             
				<ul>
				
                                    <li><a href="index.php?c=cliente&a=buscarusuario"><i class="icon-chevron-right"></i>Buscar</a></li>
                                    <li><a href="index.php?c=cliente&a=nuevousuarioxAdmin"><i class="icon-chevron-right"></i>Registrar</a></li>
				
				</ul>
			</li>
			<li class="subMenu"><a> Reportes </a>
				<ul style="display:none">
				<li><a href="index.php?c=cliente&a=ReportesdeUsuarios"><i class="icon-chevron-right"></i>Usuario</a></li>
				<li><a href="index.php?c=libro&a=ReportesLibros"><i class="icon-chevron-right"></i>Libro</a></li>												
												
				
			</li>
                        </ul>
			<li><a href="index.php?c=cliente&a=Principal">Salir</a></li>
			
		
		<br/>
		 
		
			
	</div>
<!-- Sidebar end=============================================== -->
<div class="span9">
    <ul class="breadcrumb">
		<li><a href="index.html">Home</a> <span class="divider">/</span></li>
		<li class="active">Actualizacion de Libro</li>
    </ul>
             <?php
  
    foreach ($data["libro"] as $dato)
    {?>	

            <form class="form-horizontal" action="index.php?c=libro&a=actualizalibro" method="POST"  >
             
		<h4>Datos del Libro aquí</h4>
			<div class="control-group">
			<label class="control-label" for="inputFname1">Codigo <sup>*</sup></label>
			<div class="controls">
                            <input readonly="" type="text" id="codLibro" name="codLibro" value="<?=$dato["codLibro"]?>" >
			</div>
		 </div>
		<div class="control-group">
			<label class="control-label" for="inputFname1">Nombre <sup>*</sup></label>
			<div class="controls">
                            <input type="text" name="nombre" id="nombre" value="<?=$dato["nombre"]?>">
			</div>
		 </div>

		 <div class="control-group">
			<label class="control-label" for="inputLnam">Resumen<sup>*</sup></label>
			<div class="controls">
                            <textarea type="text" id="resumen" name="resumen" rows="10" cols="50"><?=$dato["resumen"]?></textarea>                           
			</div>
		 </div>
                <div class="control-group">
		<label class="control-label">ISBN<sup>*</sup></label>
		<div class="controls">
                            <input readonly="" type="text" id="ISBN" name="ISBN" value="<?=$dato["ISBN"]?>" >
			</div>
	  </div>
		<div class="control-group">
		<label class="control-label" for="input_email">Precio<sup>*</sup></label>
		<div class="controls">
                    <input type="text" id="precio"  name="precio" value="<?=$dato["precio"]?>">
		</div>
	  </div>
                	
                
                	<div class="control-group">
		<label class="control-label" for="input_email">codAutor<sup>*</sup></label>
		<div class="controls">
                            <input readonly="" type="text" id="CodAutor" name="CodAutor" value="<?=$dato["CodAutor"]?>" >
			</div>
	  </div>

	
	
                <div><br></div>
	<div class="alert alert-block alert-error fade in">
		<button type="button" class="close" data-dismiss="alert">×</button>
		<strong>Millenium S.A.C</strong> Elige y compra los mejores libros del mercado en nuestra tienda virtual. Nos ubicamos en la AV. PERÚ 3124 en San Martin de Porres. !AHORA O NUNCA!  
	
                
	<div class="control-group">
			<div class="controls">
				<input type="hidden" name="email_create" value="1">
				<input type="hidden" name="is_new_customer" value="1">
                                 <button  type="submit" name="guardar" class="btn btn-large btn-success">Actualizar</button>
                                 <button margin:10px type="#" name="cancelar" class="btn btn-large btn-success">Cancelar</button>              
			</div>          
        </div>
                </div>
                 </form>
                <?php
    }
                
                ?>
           
          
           
        
   
      
       <!--FINAL DEL FORM--->
</div>

</div>
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