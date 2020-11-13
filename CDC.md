# Cahier des charges

## Contexte

Le **LAM** (**L**aboratoire d'**A**strophysique de **M**arseille) est un laboratoire français combinant la recherche fondamentale en astrophysique et le développement d’instrumentation innovante pour l’observation de l’Univers. La recherche en astrophysique s’articule autour de trois grands thèmes : d'une part, la formation et l’évolution des galaxies dans un contexte cosmologique, d'autre part, la formation et l’évolution du système solaire et des systèmes planétaires et enfin, l'innovation en optique pour l'instrumentation astronomique.

Le contexte est donc celui de la gestion des astres trouvés et de pouvoir entrer leur classification.

## Problématiques

Le nombre grandissant d'astres découvert par le laboratoire fait qu'il devient impossible de stocker et de maintenir l'ensemble des planètes dans des fichiers sur un ordinateur.

De ce fait plusieurs problématiques se posent :

- Comment gérer la masse grandissante de données générées par le laboratoire ?
- Comment garder à jour la classification des planètes ?
- Comment automatiser le stockage des astres dans le système informatique ?

## Besoins

Des quelques problématiques décrites ci-dessus, on peut en déduire les besoins principaux besoins du système qui ne allons mettre en place. Les voici : 

- Pour toutes découvertes faite par le laboratoire, pourvoir facilement ajouter un astre ainsi que ses informations.
- Pouvoir gérer et visualiser les étoiles découvertes.

## Solutions

Pour répondre à l'appel d'offre lancé par le laboratoire, notre startup innovante à la solution !

### Solutions fonctionnels

### Solutions Techniques



## Livrables

Le laboratoire possédant un serveur ainsi qu'un parc informatique, nous proposerons de livrer un container **Docker**.

Lors des mises à jours, l'administrateur du système devra suivre la procédure suivante sur le serveur :

- Stopper les services 

```
docker-compose down
```

- Télécharger les mises à jours

```
git pull
```

- Redémarrer les services

```
docker-compose up
```