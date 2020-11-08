<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Bootshop online Shopping cart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
     <meta name="description" content="">
        <meta name="author" content="templatemo">

        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/templatemo-style.css" rel="stylesheet">
	
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
	<div class="span6">Welcome!<strong> User</strong></div>
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
		<div class="well well-small"><a id="myCart"><img src="css/MenuPrincipal/themes/images/ico-cart.png" alt="cart"> <?=count($carrito)?> Productos en Carrito</a></div>
		<ul id="sideManu" class="nav nav-tabs nav-stacked">
<div class="well well-small" >MANTENIMIENTO</div>
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
		<li class="active">Busqueda de Libro</li>
    </ul>
	
                
            <form id="nuevo" name="nuevo" action="index.php?c=libro&a=BusqLibroxNombre" method="POST">
	  <div>
            <h3> Busqueda de Libro</h3>
            <tr><center><td>Nombre del Libro<td><input  type="text" id="nom" name="nom">
                <br><button type="submit" name="btnBusc" class="btn btn-info">Buscar</button>
                <td> <a class="btn btn-info" href="index.php?c=libro&a=NuevoLibro">Agregar</a>
        
                    </div>
            
                
                  </form>
                
	<div class="control-group">
          
            
             <table class="table table-sm table-dark">
                 <tr><th>CodLibro<th>Nombre<th>ISBN<th>Precio<th>Opcion<th>Opcion
                        <?php
                           if (isset($_REQUEST["btnBusc"]))
                         {
                            foreach ($data["libroxnom"] as $dato)
                            {
                              
                              echo "<tr><td>".$dato["codLibro"]."<td>".$dato["nombre"]."<td>".$dato["ISBN"]."<td>".$dato["precio"]."";
                          
                              ?>
                    <td><a  href="index.php?c=libro&a=datoslibro&id=<?=$dato["codLibro"]?>" class="btn btn-info">Elegir</a><td><a href="index.php?c=libro&a=eliminalibro&id=<?=$dato["CodAutor"]?>" class="btn btn-info">Eliminar</a>
                        <?php
                           }
                         }

                          
                        ?>
            </table>
        </div>
   
      
           

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

