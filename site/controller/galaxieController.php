<?php
	include_once('model/galaxieManager.php');

	if(isset($_GET["action"]))
	{
		switch ($_GET["action"]) {
	
			case 'ajouterGalaxie': {
				ajouterGalaxie($_POST["nomg"], $_POST["typeg"], $_POST["lon"], $_POST["lat"], $_POST["uniteposition"]);
			}

			case 'modifierGalaxie': {
				modifierGalaxie($_POST["nomg"], $_POST["typeg"], $_POST["lon"], $_POST["lat"], $_POST["uniteposition"]);
			}

			case 'supprimerGalaxie': {
				supprimerGalaxie($_POST["nomg"]);
			}
		
		}
	}

	$request = getGalaxies();

	include('view/galaxieView.php');
?>
