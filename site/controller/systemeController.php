<?php
	include_once('model/systemeManager.php');

	if(isset($_GET["action"]))
	{
		switch ($_GET["action"]) {
	
			case 'ajouterSysteme': {
				ajouterSysteme($_POST["noms"], $_POST["types"], $_POST["age"], $_POST["uniteage"]);
			}

			case 'modifierSysteme': {
				modifierSysteme($_POST["noms"], $_POST["types"], $_POST["age"], $_POST["uniteage"]);
			}

			case 'supprimerSysteme': {
				supprimerSysteme($_POST["noms"]);
			}
		
		}
	}

	$request = getSystemes();

	include('view/systemeView.php');
?>
