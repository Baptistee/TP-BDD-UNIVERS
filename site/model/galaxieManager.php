<?php

function getGalaxies() {
	$req = DB::get()->query('select * from galaxie');
	return $req;
}

function ajouterGalaxie($nomg, $typeg, $lon, $lat, $uniteposition) {

	$req = DB::get()->prepare('insert into galaxie (nomg, typeg, lon, lat, uniteposition) values (:nomg, :typeg, :lon, :lat, :uniteposition)');

	try {
		$req->execute(array(
			'nomg' => $_POST['nomg'],
			'typeg' => $_POST['typeg'],
			'lon' => $_POST['lon'],
			'lat' => $_POST['lat'],
			'uniteposition' => $_POST['uniteposition']
			));
	}

	catch (Exception $ex) {
		$ex->getMessage();
	}
}

function modifierGalaxie($nomg) {

	$req = DB::get()->prepare('update nomg, typeg, lon, lat, uniteposition set galaxie.nomg = :nomg,  galaxie.typeg=:typeg, galaxie.lon=:lon, galaxie.lat=:lat, galaxie.uniteposition=:uniteposition from galaxie, systeme');

	try {
		$req->execute(array(
			'nomg' => $_POST['nomg'],
			'typeg' => $_POST['typeg'],
			'lon' => $_POST['lon'],
			'lat' => $_POST['lat'],
			'uniteposition' => $_POST['uniteposition']
			));
	}

	catch (Exception $ex) {
		$ex->getMessage();
	}
}

function supprimerGalaxie($nomg) {

	$req = DB::get()->prepare('delete from galaxie where exists (select * from galaxie where galaxie.nomg = :nomg);');

	try {
		$req->execute(array(
			'nomg' => $_POST['nomg']
			));
	}

	catch (Exception $ex) {
		$ex->getMessage();
	}
}

?>