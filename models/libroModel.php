<?php


class libroModel {
   private $db;
		private $libro;
		
		public function __construct(){
			$this->db = Conectar::conexion();
			$this->libro= array();
		}
                
                         public function get_libros()
		{
			$sql = "select l.codLibro,l.nombre,l.resumen,l.precio,l.ISBN,l.img,a.nombreAutor,a.nacionalidad from libro l,autor a
                        where l.CodAutor=a.CodAutor";
			$resultado = $this->db->query($sql);
			while($row = $resultado->fetch_assoc())
			{
				$this->libro[] = $row;
			}
			return $this->libro;
		}
                
                
                       public function BuscarLibro($nom){
				$sql = "select * from libro where  trim(nombre) like('$nom%')";
			$resultado = $this->db->query($sql);
			while($row = $resultado->fetch_assoc())
			{
				$this->libro[] = $row;
			}
			return $this->libro;
			
		}
                        public function BuscarLibroxID($cod){
		        $sql = "select l.codLibro,a.CodAutor,l.nombre,l.stock,l.resumen,l.precio,l.ISBN,l.img,a.nombreAutor,a.nacionalidad from libro l,autor a
                        where l.CodAutor=a.CodAutor and trim(codLibro)='$cod'";
			$resultado = $this->db->query($sql);
			while($row = $resultado->fetch_assoc())
			{
				$this->libro[] = $row;
			}
			return $this->libro;
			
		}
                 public function agregalibro($nombre, $resumen, $ISBN, $precio,$img, $nombreAutor,$nacionalidad){
			
			$resultado = $this->db->query("call SPlibro('$nombre', '$resumen','$img' ,'$ISBN', '$precio', '$nombreAutor','$nacionalidad')");
			
		}
                 public function ActualizaLibro($codL, $nomL, $resu,$ISBN, $pre, $CodAutor){
			
			$resultado = $this->db->query("update libro set nombre='$nomL',resumen='$resu',ISBN='$ISBN',precio=$pre,CodAutor='$CodAutor' where codLibro='$codL'");			
		}
                 public function EliminarLibro($coda){
			
			$resultado = $this->db->query("delete from libro where CodAutor='$coda'");
                        $resultado = $this->db->query("delete from autor where CodAutor='$coda'");
		}
}
