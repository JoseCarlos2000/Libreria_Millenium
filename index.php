<?php
	
	require_once "./config/config.php";
	require_once "./core/routes.php";
	require_once "./config/database.php";
	require_once "./controllers/cliente.php";
	require_once "./controllers/libro.php";
	if(isset($_GET['c'])){
		
		$controlador = cargarControlador($_GET['c']);
		
		if(isset($_GET['a'])){
			if(isset($_GET['id'])){
				cargarAccion($controlador, $_GET['a'], $_GET['id']);
				} else {
				cargarAccion($controlador, $_GET['a']);
			}
			} else {
			cargarAccion($controlador, ACCION_PRINCIPAL);
		}
		
		} else {
	
		$controlador = cargarControlador(CONTROLADOR_PRINCIPAL);
		$accionTmp = ACCION_PRINCIPAL;
		$controlador->$accionTmp();
                //Prueba de Integración con Jenkins 1.0
                //Prueba de Gestion de Versiones con Git
                //Probador de versiones : Jose Carlos Huanatico Lipa
                //Fecha 8/12/2020
                //Version del netbeans 8.2
                //Desarrollador e Integrador: Jose Carlos Huanatico Lipa
                //Curso de Ingeniería de Software II
                //2020 II
	}
?>