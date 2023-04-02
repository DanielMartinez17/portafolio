<?php 
	/*
	*
	*
	*/
	class Usuario{
		private $id;
		private $nombre;
		private $clave;

		public function getId(){
			return $this->id_usuarios;
		}

		public function setId($id){
			$this->id_usuarios = $id;
		}

		public function getNombre(){
			return $this->nombre;
		}

		public function setNombre($nombre){
			$this->nombre = $nombre;
		}

		public function getClave(){
			return $this->contrasena;
		}

		public function setClave($clave){
			$this->contrasena = $clave;
		}
	}
?>