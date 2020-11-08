<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Petro Market</title>
    
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
	
    <!--Estilos-->
    <script src="../../librerias/bootstrap/js/jquery.js" type="text/javascript"></script>
    <script src="../../librerias/bootstrap/js/bootstrap.js"></script>
    <script src="../../librerias/alertifyjs/alertify.js"></script>
    <link rel="stylesheet" type="text/css" href="../../librerias/alertifyjs/css/alertify.css">
    <link rel="stylesheet" type="text/css" href="../../ librerias/alertifyjs/css/themes/default.css">

 
  </head>
<body>
   <?php
if($data["validastock"]!=true){   
include_once 'plantillas/jserrorStock.php';}else{}   
   
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
	<div class="pull-right">
		
		
            <a><span class="btn btn-mini btn-primary"><i class="icon-shopping-cart icon-white"></i><?=count($carrito)?> Productos en Carrito  </span> </a> 
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
      <a class="brand" href="index.php?c=libro&a=MPrincipal"><img src="css/MenuPrincipal/themes/images/logolib.png" width="193px" height="80px"/></a>

  
  </div>
</div>
</div>
</div>
<!-- Header End====================================================================== -->
<div id="mainBody">
	<div class="container">
	<div class="row">
<!-- Sidebar ================================================== -->
	<div id="sidebar" class="span3">
            <div class="well well-small"><a id="myCart" ><img src="css/MenuPrincipal/themes/images/ico-cart.png" alt="cart"><?=count($carrito)?> Productos en Carrito</a></div>	
	</div>
<!-- Sidebar end=============================================== -->
	<div class="span9">
    <ul class="breadcrumb">
		
    </ul>
	
            <center><h2>Carrito de Compras</h2>
                <form action="#" method="POST">
                <table class="table table-sm table-dark">
                    <tr><th>Codigo<th>Nombre<th>Autor<th>Precio<th>Cantidad<th>Importe<th>Imagen<th>Opciones
               <?php
                   $acum=0;
                   $SubTo=0;
                   
                   foreach ($carrito as $dato)
                   {
                       echo"<tr><td>".$dato[0]."<td>".$dato[1]."<td>".$dato[2]."<td>S/.".$dato[3]."<td>".$dato[4]." unds<td>S/.".$dato[5]."";
               ?>
                        <td><img src="css/images/libros/<?=$dato[6]?>" width="80" height="50"> 
                        <td><a class="btn btn-primary borrar" href="index.php?c=libro&a=anulaCarrito&id=<?=$acum?>">Quitar</a>
                            <?php
                            $acum++;
                            $SubTo=$SubTo+$dato[5];
                   }
                   $IGV= round($SubTo*0.18,2);
                   $TOT=round($SubTo+$IGV,2);
                   echo"<tr><th colspan=2>SUBTOTAL : S/.$SubTo";
                   echo"<th colspan=3>IGV 18% : S/.$IGV";
                   echo"<th colspan=2>TOTAL : S/.$TOT";
                   echo"<th>";
              
             
               
               ?>
                </table>
                <a href="index.php?c=libro&a=MPrincipal"> <span class="btn btn-mini btn-primary"><i class="icon-shopping-cart icon-white"></i> Seguir Comprando  </span> </a>
               <a > <span class="btn btn-mini btn-primary"><i class="icon-shopping-cart icon-white"></i>Comprar  </span> </a>
                </form>
            </center>
       <!--FINAL DEL FORM--->
</div>

</div>
</div>
</div>
</div>

<!-- Footer ================================================================== -->
	<div  id="footerSection">
	<div class="container">
<center><h5><br>Millenium S.A.C By UCSS 2020</h5></center>
	</div><!-- Container End -->
	</div>
<!-- Placed at the end of the document so the pages load faster ============================================= -->

</body>

</html> 