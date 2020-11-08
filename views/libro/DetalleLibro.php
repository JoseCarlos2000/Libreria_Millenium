<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Petro Market</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    
	
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
 <?php
 foreach ($data["libroxid"] as $dato)
 {
 ?>
    <div id="header">
<div class="container">
<div id="welcomeLine" class="row">
	<div class="span6">Bienvenido!<strong> Usuario</strong></div>
	<div class="span6">
	<div class="pull-right">
		
		
            <a><span class="btn btn-mini btn-primary"><i class="icon-shopping-cart icon-white"></i><?=count($carrito)?> Productos en Carrito</span> </a> 
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
     <a class="brand" href="index.php?c=libro&a=MPrincipal"><img src="css/MenuPrincipal/themes/images/logolib.png" width="193px" height="80px"/></a>>
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
            <div class="well well-small"><a id="myCart"><img src="css/MenuPrincipal/themes/images/ico-cart.png" alt="cart"><?=count($carrito)?> Productos en Carrito</a></div>	
	</div>
<!-- Sidebar end=============================================== -->
	<div class="span9">
  	
	<div class="row">	  
			<div id="gallery" class="span3">
                            <a href="css/MenuPrincipal/themes/images/products/large/f1.jpg" title="Fujifilm FinePix S2950 Digital Camera">
                <img src="css/images/libros/<?=$dato["img"]?>" style="width:100%"/>
               
            </a>
			<div id="differentview" class="moreOptopm carousel slide">
              
           
              </div>
			  
			
			</div>
            <div class="span6">
                <h3><?= $dato["nombre"] ?> </h3>
                <small><?= $dato["nombreAutor"] ?> - <?= $dato["nacionalidad"] ?></small>
                <hr class="soft"/>
 
                <form action="index.php?c=libro&a=CarritoLibro" method="POST" name="carrito"  class="form-horizontal qtyFrm">
                    <div class="control-group">
                        <label class="control-label"><span>S/.<?=$dato["precio"] ?></span></label>
                        <input name="codLibro" id="codLibro" type="hidden" value="<?=$dato["codLibro"]?>">
                        <input name="nombre" id="nombre" type="hidden" value="<?=$dato["nombre"]?>">
                        <input name="nombreAutor" id="nombreAutor" type="hidden" value="<?=$dato["nombreAutor"]?>">
                        <input name="precio" id="precio" type="hidden" value="<?=$dato["precio"]?>">
                        <input name="stock" id="stock" type="hidden" value="<?=$dato["stock"]?>">
                        <input name="img" id="img" type="hidden" value="<?=$dato["img"]?>">
                        <div class="controls">
             
                            <td>Ingrese Cantidad:<input name="cantidad" id="cantidad" type="number" class="span1" required>
                               <!-- <a  class="btn btn-large btn-primary pull-right">Añadir a Carrito<i class=" icon-shopping-cart"></i></a> -->
                                <button href="##" onclick="validastock()" class="btn btn-primary" type="submit" ><i class="icon-shopping-cart icon-white"></i> Añadir a Carrito </button>
                        </div>
                    </div>
                

                <hr class="soft"/>
               <h4><?=$dato["stock"]?> Unidades en stock</h4>
               </form>
                    
              
            </div>	
        </div>
				<br class="clr">
					 </div>
		</div>
          </div>

	</div>

<script>
function validastock(){    
            cantidad=Number(carrito.cantidad.value);
            canticar=<?=$dato["stock"]?>;
            if(cantidad>canticar){
                //alert("stock no disponible");
                 return;
           }
             carrito.submit(); 
}
</script>
  <?php
  
 }
  ?>

<!-- MainBody End ============================= -->
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
</body>

</html>