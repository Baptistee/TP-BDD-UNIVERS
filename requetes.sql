-- Ajouter
----------
Permet d'ajouter une nouvelle galaxie : 
insert into galaxie (nomg, typeg, lon, lat, uniteposition) values (:nomg, :typeg, :lon, :lat, :uniteposition)
Permet d'ajouter un nouveau systeme :
insert into systeme (noms, nomg, types, age, uniteage) values (:noms, :nomg, :types, :age, :uniteage)
Permet d'ajouter un nouvelle astre :
insert into astre (noma, noms, taillea, tailleunite, massea, masseunite) values (:noma, :noms, :taillea, :tailleunite, :massea, :masseunite)
Permet d'ajouter une nouvelle etoile :
insert into etoile (noma, typee, tempsurface) values (:noma, :typee, :tempsurface)
Permet d'ajouter une nouvelle planette  :
insert into planete (noma, typep) values (:noma, :typep ) insert into autretypeastre (noma, typea) values (:noma, :typea)
Permet d'ajouter un nouveau satelite a un astre :
insert into graviter (nomsat, noma, distancesatellite, distanceunite) values (:nomsat, :noma, :distancesatellite, :distanceunite)
Permet d'ajouter un nouveau autre type d'astre (different des planette et soleille) :
insert into autretypeastre (noma, typea) values (:noma, :typea)
Permet d'ajouter un nouveau atribut a un autre type d'astre :
insert into atribueautretypeastre (id, noma, attribut, valeur) values (:id, :noma, :attribut, :valeur)


-- Supprimer
------------
Permet de supprimer une galaxie :
delete from galaxie where exists (select * from galaxie where galaxie.nomg = :nomg);
Permet de supprimer un systeme :
delete from systeme where exists (select * from systeme where systeme.noms = :noms);
Permet de supprimer un astre :
delete from astre natural join planete natural join graviter natural join etoile natural join autretypeastre natural join atribueautretypeastre where exists (select * from astre where gastre.noma = :noma);
Permet de supprimer lien planete satelite :
delete from graviter where exists (select * from graviter where graviter.noma = :noma and graviter.nomsat = :nomsat);
Permet de supprimer un atribut d'un autre type d'astre:
delete from atribueautretypeastre where exists (select * from atribueautretypeastre where atribueautretypeastre.noma = :noma and atribueautretypeastre.id = :id);


-- Modifier
-----------
Permet de modifier les donnée d'une galaxie :
update nomg, typeg, lon, lat, uniteposition set galaxie.nomg = :nomg, systeme.nomg = :nomg,  galaxie.typeg=:typeg, galaxie.lon=:lon, galaxie.lat=:lat, galaxie.uniteposition=:uniteposition from galaxie, systeme ;
Permet de modifier les donnée d'un systeme :
update noms, types, age, uniteage set systeme.noms = :noms, astre.noms = :noms, systeme.types = :types, systeme.age = :age, systeme.uniteage = :uniteage   from systeme , astre ;
Permet de modifier les donnée d'un astre :
update noma, taillea, tailleunite, massea, masseunite set astre.noma = :noma,graviter.noma = :noma,planete.noma = :noma,etoile.noma = :noma,autretypeastre.noma = :noma,atribueautretypeastre.noma = :noma,astre.taillea = :taillea,astre.tailleunite = :tailleunite,astre.massea = :massea,astre.masseunite = :masseunite from astre,graviter,planete,etoile,autretypeastre,atribueautretypeastre ;
Permet de modifier les donnée d'un lien planette satelite :
update noma, nomsat, distancesatellite, distanceunite set astre.noma = :noma,graviter.noma = :noma,planete.noma = :noma,etoile.noma = :noma,autretypeastre.noma = :noma,atribueautretypeastre.noma = :noma,graviter.distanceunite = :distancesatellite,graviter.nomsat = :nomsat,graviter.distanceunite = :distanceunite from astre,graviter,planete,etoile,autretypeastre,atribueautretypeastre ;
Permet de modifier les donnée d'une planette:
update noma, typep set astre.noma = :noma,graviter.noma = :noma,planete.noma = :noma,etoile.noma = :noma,autretypeastre.noma = :noma,atribueautretypeastre.noma = :noma,planete.typep = :typep from astre,graviter,planete,etoile,autretypeastre,atribueautretypeastre ;
Permet de modifier les donnée d'une etoile :
update noma, typee, tempsurface set astre.noma = :noma,graviter.noma = :noma,planete.noma = :noma,etoile.noma = :noma,autretypeastre.noma = :noma,atribueautretypeastre.noma = :noma,etoile.typee = :typee,etoile.tempsurface = :tempsurface from astre,graviter,planete,etoile,autretypeastre,atribueautretypeastre ;
Permet de modifier les donnée d'un autre type d'astre :
update noma, typea set astre.noma = :noma,graviter.noma = :noma,planete.noma = :noma,etoile.noma = :noma,autretypeastre.noma = :noma,atribueautretypeastre.noma = :noma,autretypeastre.typea = :typea from astre,graviter,planete,etoile,autretypeastre,atribueautretypeastre ;
Permet de modifier les donnée d'un atribut a un autre type d'astre :
update noma, id,attribut,valeur set astre.noma = :noma,graviter.noma = :noma,planete.noma = :noma,etoile.noma = :noma,autretypeastre.noma = :noma,atribueautretypeastre.noma = :noma, atribueautretypeastre.id = :id,atribueautretypeastre.attribut = :attribut,atribueautretypeastre.valeur = :valeur from astre,graviter,planete,etoile,autretypeastre,atribueautretypeastre ;
