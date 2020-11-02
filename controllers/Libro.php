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
                
  
                  public function agregalibro(){
                  
			$nombre = $_POST['nombre'];
			$resumen = $_POST['resumen'];
			$ISBN = $_POST['ISBN'];
			$precio = $_POST['precio'];
                        $nombreAutor = $_POST['nombreAutor'];
                        $nacimiento=$_POST['nacionalidad'];
                                   $libro = new libroModel();         
                        
			$libro->agregalibro($nombre, $resumen, $ISBN, $precio, $nombreAutor, $nacimiento);
			require_once "views/libro/BuscarLibro.php";
                        
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
