	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap" rel="stylesheet"> 
	<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/Alerta/css/estilos.css">
<?php

class ClienteController {
  public  function __construct() {
        require_once "models/clienteModel.php";
         require_once "models/libroModel.php";
    }

        		public function Login(){
                            require_once "views/usuario/Login.php";	
		}
                		
                public function nuevousuario(){
			require_once "views/usuario/AgregarUsuario.php";
                        
		}

                public function buscarusuario(){
			require_once "views/usuario/BuscarUsuario.php";
                        
		}
                public function datosusuario($id){
                        $cliente = new clienteModel();
			
			$data["clientes"] = $cliente->BuscarUsuarioxID($id);
			require_once "views/usuario/ActualizaUsuario.php";
                        
		}
                public function actualizausuario(){
                        $cliente = new clienteModel();
		        $cuenta = $_POST['cuenta'];
			$pas = $_POST['contraseña'];
			$ape = $_POST['apellidos'];
			$nom = $_POST['nombres'];
			$dire = $_POST['direccion'];
                        $loca = $_POST['localidad'];
			$cpos = $_POST['cpostal'];
                        $telef = $_POST['telefono'];
			$correo = $_POST['correo'];
			$data["clientes"] = $cliente->ActualizaUsuario($cuenta, $pas, $ape, $nom, $dire, $loca, $cpos, $telef, $correo);
			require_once "views/usuario/BuscarUsuario.php";
                        
		}
                public function eliminausuario($cuenta){
                        $cliente = new clienteModel();
			$cliente->EliminarUsuario($cuenta);
			require_once "views/usuario/BuscarUsuario.php";
                        
		}
                public function guardarusuario(){
			
			$cuenta = $_POST['cuenta'];
			$pas = $_POST['contraseña'];
			$ape = $_POST['apellidos'];
			$nom = $_POST['nombres'];
			$dire = $_POST['direccion'];
                        $local = $_POST['localidad'];
			$cp = $_POST['cpostal'];
                        $tel = $_POST['telefono'];
			$cor = $_POST['correo'];
			$tp=$_POST['tipot'];
                        $numt=$_POST['numt'];
                        $fven=$_POST['fven'];
                        $cod=$_POST['cvv'];
			$usuario = new clienteModel();
			$usuario->insertarusuario($cuenta, $pas, $ape, $nom, $dire, $local, $cp, $tel, $cor);
			$usuario->insertartarjeta($tp, $numt, $fven, $cod, $cuenta);
			$this->Login();
		}
                    public function validausuario(){
			
			
			$cliente = new clienteModel();
                        $libro=new libroModel();
			$cuenta=$_POST['cuenta'];
                        $pas=$_POST['password'];
			$data["clientes"] = $cliente->valida($cuenta, $pas);
                        if(empty($data["clientes"])){
                            require_once 'views/usuario/Login.php';
                            require_once 'plantillas/jsalerta.php';
                            require_once 'plantillas/head.php';      
                        }
                        else {
                            
                            $data["libros"]=$libro->get_libros();
                            require_once 'views/usuario/Principal.php';
                            include_once 'plantillas/jsalertasucees.php';
                            
                        }
		}
    		public function index(){
			
			
			$cliente = new clienteModel();
			$data["titulo"] = "cliente";
			$data["clientes"] = $cliente->get_clientes();
			
			require_once "views/cliente.php";	
		}
                
                
                public function BusqClientexApellido(){
			
			
			$cliente = new clienteModel();
			$ape=$_POST['apellido'];
			$data["clientes"] = $cliente->BuscarUsuario($ape);
			
			require_once "views/usuario/BuscarUsuario.php";	
		}
                
                
}
