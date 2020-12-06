<?php
	session_start();
	error_reporting(E_ALL);
	require_once("config.php");
	require_once("view/teteView.php");
	require_once("view/navbarView.php");
	

	if(!isset($_REQUEST['uc'])) {
		$uc = 'galaxie';
	} else {
		$uc = $_REQUEST['uc'];
	}

	switch($uc) {
	
		case 'galaxie': {
			include("controller/galaxieController.php");break;
		}

		case 'systeme': {
			include("controller/systemeController.php");break;
		}

		case 'astre': {
			include("controller/astreController.php");break;
		}
	}

	require_once("view/piedView.php");
?>