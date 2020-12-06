<?php
	include_once('model/astreManager.php');

	if(isset($_GET["action"]))
	{
		switch ($_GET["action"]) {
	
			case 'ajouterAstre': {
				ajouterAstre($_POST["noma"], $_POST["taillea"], $_POST["tailleunite"], $_POST["massea"], $_POST["masseunite"]);
			}

			case 'modifierAstre': {
				modifierAstre($_POST["noma"], $_POST["taillea"], $_POST["tailleunite"], $_POST["massea"], $_POST["masseunite"]);
			}

			case 'supprimerAstre': {
				supprimerAstre($_POST["noma"]);
			}
		
		}
	}

	$request = getAstres();

	include('view/astreView.php');
?>
