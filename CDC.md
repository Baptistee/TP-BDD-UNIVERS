# Cahier des charges

## Contexte

Le **LAM** (**L**aboratoire d'**A**strophysique de **M**arseille) est un laboratoire français combinant la recherche fondamentale en astrophysique et le développement d’instrumentation innovante pour l’observation de l’Univers. La recherche en astrophysique s’articule autour de trois grands thèmes : d'une part, la formation et l’évolution des galaxies dans un contexte cosmologique, d'autre part, la formation et l’évolution du système solaire et des systèmes planétaires et enfin, l'innovation en optique pour l'instrumentation astronomique.

Le contexte est donc celui de la **gestion** des astres trouvés et de pouvoir les **ajouter** dans des **catégories**.

## Problématiques

Le nombre grandissant d'astres découvert par le laboratoire fait qu'il devient impossible de stocker et de maintenir l'ensemble des planètes dans des fichiers sur un ordinateur.

De ce fait plusieurs problématiques se posent :

- Comment **gérer** la masse grandissante de données générées par le laboratoire ?
- Comment **garder à jour** la classification des planètes ?
- Comment **automatiser** le stockage des astres dans le système informatique ?

## Besoins

Des quelques problématiques décrites ci-dessus, on peut en déduire les besoins principaux besoins du système qui ne allons mettre en place. Les voici : 

- Pour toutes découvertes faite par le laboratoire, pourvoir facilement **ajouter** un astre ainsi que ses **informations**.
- Pouvoir **gérer** et **visualiser** les étoiles découvertes.

## Solutions

Pour répondre à l'appel d'offre lancé par le laboratoire, notre startup innovante a la solution !

### Solutions fonctionnels

- Un système capable d'**ajouter** et de **vérifier** la cohérence des nouvelles données.
- Un système de **gestion** des astres.
- L'utilisateur peut **visualiser** les étoiles triées en fonction d'une catégorie.
- (optionnel si le temps) possibilité d'ajouter des astres découvert par des amateurs, donc ajouter un système de rôle :
  - administrateur, chercheur ou amateur.

### Solutions Techniques

- Une base de données **PostgreSQL** pour la gestion et la manipulation des données. **PostgreSQL** est une base de données libre, sans coût de licence, et elle existe depuis plus de 20 ans.
- **Serveur Web Apache** pour la délivrance des pages Web. **Apache** est aujourd'hui le serveur le plus populaire et dispose de nombreux modules.
- **PHP** pour la génération dynamique de pages web. **PHP** est un Langage simple et rapide à mettre en œuvre pour la création de site web. Bibliothèques très fournies.
- **Docker** pour le packaging de l'application dans un environnement maîtrisée et cloisonné.

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