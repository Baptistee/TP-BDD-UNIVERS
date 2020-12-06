<?php

function getAstres() {
	$req = DB::get()->query('select * from astre');
	return $req;
}

function ajouterAstre($noma, $taillea, $tailleunite, $massea, $masseunite) {

	$req = DB::get()->prepare('insert into astre (noma, taillea, tailleunite, massea, masseunite) values (:noma, :taillea, :tailleunite, :massea, :masseunite)');

	try {
		$req->execute(array(
			'noma' => $_POST['noma'],
			'taillea' => $_POST['taillea'],
			'tailleunite' => $_POST['tailleunite'],
            'massea' => $_POST['massea'],
            'masseunite' => $_POST['masseunite']
			));
	}

	catch (Exception $ex) {
		$ex->getMessage();
	}
}

function modifierAstre($noma, $taillea, $tailleunite, $massea, $masseunite) {

	$req = DB::get()->prepare('update noma, taillea, tailleunite, massea, masseunite set astre.noma = :noma,graviter.noma = :noma,planete.noma = :noma,etoile.noma = :noma,autretypeastre.noma = :noma,atribueautretypeastre.noma = :noma,astre.taillea = :taillea,astre.tailleunite = :tailleunite,astre.massea = :massea,astre.masseunite = :masseunite from astre,graviter,planete,etoile,autretypeastre,atribueautretypeastre');

	try {
		$req->execute(array(
			'noma' => $_POST['noma'],
			'taillea' => $_POST['taillea'],
			'tailleunite' => $_POST['tailleunite'],
            'massea' => $_POST['massea'],
            'masseunite' => $_POST['masseunite']
			));
	}

	catch (Exception $ex) {
		$ex->getMessage();
	}
}

function supprimerAstre($noma) {

	$req = DB::get()->prepare('delete from astre natural join planete natural join graviter natural join etoile natural join autretypeastre natural join atribueautretypeastre where exists (select * from astre where gastre.noma = :noma)');

	try {
		$req->execute(array(
			'noma' => $_POST['noma']
			));
	}

	catch (Exception $ex) {
		$ex->getMessage();
	}
}

?>