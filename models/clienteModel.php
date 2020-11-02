<?php

class clienteModel {
   private $db;
		private $cliente;
		
		public function __construct(){
			$this->db = Conectar::conexion();
			$this->cliente= array();
		}
                 		public function valida($cuenta,$pas)
		{
			$sql = "SELECT * FROM cliente WHERE cuenta='$cuenta' and contraseña='$pas'";
			$resultado = $this->db->query($sql);
			while($row = $resultado->fetch_assoc())
			{
				$this->cliente[] = $row;
			}
			return $this->cliente;
		}               
                
                		public function get_clientes()
		{
			$sql = "SELECT * FROM cliente";
			$resultado = $this->db->query($sql);
			while($row = $resultado->fetch_assoc())
			{
				$this->cliente[] = $row;
			}
			return $this->cliente;
		}
                public function insertarusuario($cuenta, $pas, $ape, $nom, $dire,$local,$cp,$tele,$correo){
			
			$resultado = $this->db->query("INSERT INTO cliente VALUES ('$cuenta', '$pas', '$ape', '$nom', '$dire','$local','$cp','$tele','$correo')");
			
		}

                       public function insertartarjeta($tp,$numt,$fven,$cod,$cuenta){
			
			$resultado = $this->db->query("INSERT INTO tarjeta VALUES ('$tp', '$numt', '$fven', '$cod', '$cuenta')");
			
		}
                       public function BuscarUsuario($ape){
				$sql = "select * from cliente where  trim(apellidos) like('$ape%')";
			$resultado = $this->db->query($sql);
			while($row = $resultado->fetch_assoc())
			{
				$this->cliente[] = $row;
			}
			return $this->cliente;
			
		}
                        public function BuscarUsuarioxID($id){
		        $sql = "select * from cliente where  trim(cuenta)='$id'";
			$resultado = $this->db->query($sql);
			while($row = $resultado->fetch_assoc())
			{
				$this->cliente[] = $row;
			}
			return $this->cliente;
			
		}
                 public function ActualizaUsuario($cuenta, $pas, $ape, $nom, $dire, $loca,$cpos,$telef,$correo){
			
			$resultado = $this->db->query("update cliente set contraseña='$pas',apellidos='$ape',nombres='$nom',direccion='$dire',localidad='$loca',cpostal='$cpos',telefono='$telef',correo='$correo' where cuenta='$cuenta'");			
		}
                 public function EliminarUsuario($cuenta){
			
			$resultado = $this->db->query("delete from tarjeta where cuenta='$cuenta'");
                        $resultado = $this->db->query("delete from cliente where cuenta='$cuenta'");
		}
}
