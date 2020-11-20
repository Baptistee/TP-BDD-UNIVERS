# Document de conception

## Dictionnaire des données et contraintes particulières

| **Variable**      | **Signification**                            | **Type** | **Taille** | **Contrainte particulière** |
| ----------------- | -------------------------------------------- | -------- | ---------- | --------------------------- |
| NomG              | Nom de la galaxie                            | Varchar  | 32         | NOT NULL                    |
| TypeG             | Type de galaxie                              | Varchar  | 32         |                             |
| Lon               | Longitude galactique                         | float    | 5          |                             |
| Lat               | Latitude galactique                          | float    | 5          |                             |
| UnitePosition     | Unité de la position                         | Varchar  | 10         |                             |
| NomS              | Nom du système                               | Varchar  | 32         | NOT NULL                    |
| TypeS             | Type de système                              | Varchar  | 32         |                             |
| NbPlanetes        | Nombre de planètes du système                | int      | 3          | valeur calculée             |
| NomA              | Nom de l'astre                               | Varchar  | 32         | NOT NULL                    |
| TailleA           | Taille de l'astre                            | int      | 10         | valeur > 0                  |
| TailleUnite       | Unité de la taille                           | Varchar  | 10         |                             |
| MasseA            | Masse de l'astre                             | int      | 10         | valeur > 0                  |
| MasseUnite        | Masse de l'astre                             | Varchar  | 10         |                             |
| NomSat            | Nom du satellite                             | Varchar  | 32         | NOT NULL                    |
| DistanceSatellite | Distance entre l'astre et le satellite       | int      | 10         | valeur > 0                  |
| DistanceUnite     | Unité de la distance                         | Varchar  | 10         |                             |
| TypeP             | Type de planète                              | Varchar  | 32         |                             |
| TypeE             | Type d'étoile                                | Varchar  | 32         |                             |
| TempSurface       | Température moyenne à la surface de l'étoile | int      | 5          | valeur > 0                  |
| TypeA             | Type d'astre                                 | Varchar  | 32         |                             |
| Id                | Id de l'astre                                | int      | 3          | NOT NULL                    |
| Attribut          | Attribut de l'astre                          | Varchar  | 32         |                             |
| Valeur            | Valeur de l'attribut de l'astre              | Varchar  | 32         |                             |

## Schéma relationnel

- **Galaxie** ( *NomG, TypeG, Lon, Lat, UnitePosition )
- **Systeme** ( *NomS, #NomG, TypeS, Lon, Lat, UnitePosition, NbPlanetes )
- **Astre** ( *NomA, #NomS, TailleA, TailleUnite, MasseA, MasseUnite )
- **Graviter** (*NomSat, #NomA, DistanceSatellite )
- **Planete** (*#NomA, TypeP )
- **Etoile** ( *#NomA, TypeE, TempSurface )
- **AutreTypeAstre** ( *#NomA, TypeA )
- **AtribueAutreTypeAstre** ( *ID, #NomA, Attribut, Valeur )

## Schéma entité association

<img align="center" width="1200" height="700" src="resources\images\CDC\bdd.png">
