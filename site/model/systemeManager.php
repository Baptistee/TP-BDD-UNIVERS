<?php

function getSystemes() {
	$req = DB::get()->query('select * from systeme');
	return $req;
}

function ajouterSysteme($noms, $types, $lon, $lat) {

	$req = DB::get()->prepare('insert into systeme (noms, types, age, uniteage) values (:noms, :types, :age, :uniteage)');

	try {
		$req->execute(array(
			'noms' => $_POST['noms'],
			'types' => $_POST['types'],
			'age' => $_POST['age'],
			'uniteage' => $_POST['uniteage']
			));
	}

	catch (Exception $ex) {
		$ex->getMessage();
	}
}

function modifierSysteme($noms, $types, $lon, $lat) {

	$req = DB::get()->prepare('update noms, types, age, uniteage set systeme.noms = :noms, astre.noms = :noms, systeme.types = :types, systeme.age = :age, systeme.uniteage = :uniteage   from systeme , astre');

	try {
		$req->execute(array(
			'noms' => $_POST['noms'],
			'types' => $_POST['types'],
			'age' => $_POST['age'],
			'uniteage' => $_POST['uniteage']
			));
	}

	catch (Exception $ex) {
		$ex->getMessage();
	}
}

function supprimerSysteme($noms) {

	$req = DB::get()->prepare('delete from systeme where exists (select * from systeme where systeme.noms = :noms)');

	try {
		$req->execute(array(
			'noms' => $_POST['noms']
			));
	}

	catch (Exception $ex) {
		$ex->getMessage();
	}
}

?>