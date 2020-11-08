	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap" rel="stylesheet"> 
	<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/Alerta/css/estilos.css">

<?php


class LibroController {
    function __construct() {
        require_once "models/libroModel.php";
    }
    
                  public function BuscarLibro(){

			
			require_once 'views/libro/BuscarLibro.php';	
		}
                              public function NuevoLibro()
                {
                                  require_once 'views/libro/AgregarLibro.php';
                }
                 public function MPrincipal(){
                            


                            $libro = new libroModel();
                            $data["libros"]=$libro->get_libros();
                            require_once 'views/usuario/Principal.php';
                 }

                 
                public function BusqLibroxNombre(){
			
			
			$libro = new libroModel();
			$nom=$_POST['nom'];
			$data["libroxnom"] = $libro->BuscarLibro($nom);
			
			require_once 'views/libro/BuscarLibro.php';	
		}
                public function BusqLibroxId($codli){
                        $libro = new libroModel();
			$data["libroxid"] = $libro->BuscarLibroxID($codli);
	                require_once 'views/libro/DetalleLibro.php';	
		}
                
  
                  public function agregalibro(){
                     
			$nombre = $_POST['nombre'];
			$resumen = $_POST['resumen'];
			$ISBN = $_POST['ISBN'];
			$precio = $_POST['precio'];
                        $nombreAutor = $_POST['nombreAutor'];
                        $nacimiento=$_POST['nacionalidad'];
                        $libro = new libroModel();         
                        //Subida de Imagen
                        $foto=$_FILES["foto"]["name"];
                        $ruta=$_FILES["foto"]["tmp_name"] ;
                        $destino="css/images/libros/".$foto;
                        copy($ruta, $destino);
 
			$libro->agregalibro($nombre, $resumen,$ISBN, $precio,$foto, $nombreAutor, $nacimiento);
			require_once "views/libro/BuscarLibro.php";
                        
		}
                public function ReportesLibros()
                {
                            $libro = new libroModel();
                            $data["libros"]=$libro->get_libros();
                            require_once 'Reportes/Reporte_de_Libros.php';
                }

                public function CarritoLibro()
                {
                    $valida=true;   
                    session_start(); 
                    $libro=new libroModel();

                    $nombre=$_POST["codLibro"];
                    $cantidad=$_POST["cantidad"];
                    $nomLibro=$_POST["nombre"];
                    $nombreautor=$_POST["nombreAutor"];
                    $precio=$_POST["precio"];
                    $img=$_POST["img"];
                    $stock=$_POST["stock"];
                    if($cantidad>$stock){
                    //Valida Stock 
                    $valida=false;$data["validastock"]=$valida;
                    }
                    else{
                     //Validar Stock   
                    $valida=true;$data["validastock"]=$valida;
                    //Carrito
                    if(isset($_SESSION["carrito"]))
                    
                    $carrito=$_SESSION["carrito"];
                else
                    $carrito=array();
                    $Importe=$precio*$cantidad;
                    $carrito[]= [$nombre,$nomLibro,$nombreautor,$precio,$cantidad,$Importe,$img];                
                    $_SESSION["carrito"]=$carrito;
                    }
                    require_once "views/libro/VentaLibro.php";
                   
                }
                public function anulaCarrito($indice)
                {   $valida=true; 
                    $valida=true;$data["validastock"]=$valida;
                    session_start();
                    $car=$_SESSION["carrito"];
                    unset($car[$indice]);
                    $_SESSION["carrito"]=$car;
                    include_once 'views/libro/VentaLibro.php';
                }
                public function actualizalibro(){
                        $libro = new libroModel();
		        $codLibro = $_POST['codLibro'];
			$nombre = $_POST['nombre'];
                        $resumen = $_POST['resumen'];
			$ISBN = $_POST['ISBN'];
                        $precio = $_POST['precio'];
                        $CodAutor = $_POST['CodAutor'];
			
			$data["libro"] = $libro->ActualizaLibro($codLibro, $nombre, $resumen, $ISBN, $precio,$CodAutor);
			require_once "views/libro/BuscarLibro.php";
                        
		}
                 public function datoslibro($nom){
                        $libro = new libroModel();
			
			$data["libro"] = $libro->BuscarLibroxID($nom);
			require_once "views/libro/ActualizarLibro.php";
                        
		}
                  public function eliminalibro($codLibro){
                        $libro = new libroModel();
			$libro->EliminarLibro($codLibro);
			require_once "views/libro/BuscarLibro.php";
                        
		}

}
