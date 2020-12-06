-----------------------------------------------------------------------------
-- SUPPRIMER
-----------------------------------------------------------------------------
DROP TABLE IF EXISTS AtribueAutreTypeAstre;
DROP TABLE IF EXISTS AutreTypeAstre;
DROP TABLE IF EXISTS Graviter;
DROP TABLE IF EXISTS Planete;
DROP TABLE IF EXISTS Etoile;
DROP TABLE IF EXISTS Astre;
DROP TABLE IF EXISTS Systeme;
DROP TABLE IF EXISTS Galaxie;


-----------------------------------------------------------------------------
-- CREER
-----------------------------------------------------------------------------
CREATE TABLE IF NOT EXISTS Galaxie (
    NomG VARCHAR(32) NOT NULL,
    TypeG VARCHAR(32),
    Lon FLOAT(5),
    Lat FLOAT(5),
    UnitePosition VARCHAR(10),
    PRIMARY KEY (NomG)
);

CREATE TABLE IF NOT EXISTS Systeme (
    NomS VARCHAR(32) NOT NULL,
    NomG VARCHAR(32) NOT NULL REFERENCES Galaxie(NomG),
    TypeS VARCHAR(32),
    Lon FLOAT(5),
    Lat FLOAT(5),
    UnitePosition VARCHAR(10),
    NbPlanetes INTEGER CHECK ( NbPlanetes > 0 ),
    PRIMARY KEY (NomS)
);

CREATE TABLE IF NOT EXISTS Astre (
    NomA VARCHAR(32) NOT NULL,
    NomS VARCHAR(32) NOT NULL REFERENCES Systeme(NomS),
    TailleA Int CHECK ( TailleA > 0 ),
    TailleUnite VARCHAR(10),
    MasseA Int CHECK ( MasseA > 0 ),
    MasseUnite VARCHAR(10),
    PRIMARY KEY (NomA)
);

CREATE TABLE IF NOT EXISTS Graviter (
    NomSat VARCHAR(32) NOT NULL,
    NomA VARCHAR(32)NOT NULL REFERENCES Astre(NomA),
    DistanceSatellite int CHECK ( DistanceSatellite > 0 ),
    PRIMARY KEY (NomSat)
);

CREATE TABLE IF NOT EXISTS Planete (
    NomA VARCHAR(32)NOT NULL REFERENCES Astre(NomA),
    TypeP VARCHAR(32),
    PRIMARY KEY (NomA)
);

CREATE TABLE IF NOT EXISTS Etoile  (
    NomA VARCHAR(32)NOT NULL REFERENCES Astre(NomA),
    TypeE VARCHAR(32),
    PRIMARY KEY (NomA)
);

CREATE TABLE IF NOT EXISTS AutreTypeAstre  (
    NomA VARCHAR(32)NOT NULL REFERENCES Astre(NomA),
    TypeA VARCHAR(32),
    PRIMARY KEY (NomA)
);

CREATE TABLE IF NOT EXISTS AtribueAutreTypeAstre (
    ID VARCHAR(32)NOT NULL,
    NomA VARCHAR(32)NOT NULL REFERENCES AutreTypeAstre(NomA),
    Attribut VARCHAR(32),
    Valeur VARCHAR(32),
    PRIMARY KEY (NomA)
);


-----------------------------------------------------------------------------
-- INSERER
-----------------------------------------------------------------------------
INSERT INTO Astre VALUES ('Pluton', 'Système Solaire', 17, '10^6', 13, '10^21');
INSERT INTO AutreTypeAstre VALUES ('Pluton', 'planète naine' );
INSERT INTO Astre VALUES ('Lune', 'Système Solaire',  37, '10^6',      73, '10^21');
INSERT INTO AutreTypeAstre VALUES ('Lune', 'satellite naturel permanent' );
INSERT INTO Graviter VALUES ('Lune', 'Terre', 384400, '10^0');
INSERT INTO Astre VALUES ('Titan', 'Système Solaire', 60, '10^6', 134, '10^21');
INSERT INTO AutreTypeAstre VALUES ('Titan', 'satellite naturel' );
INSERT INTO Graviter VALUES ('Titan', 'Saturne', 1222000, '10^0');