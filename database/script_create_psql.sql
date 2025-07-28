CREATE TABLE client (
    id SERIAL PRIMARY KEY,
    nom VARCHAR(100) NOT NULL,
    prenom VARCHAR(100) NOT NULL
);
CREATE TABLE tranche (
    id SERIAL PRIMARY KEY,
    type VARCHAR(50) NOT NULL,
    consommationmin INT NOT NULL,
    consommationmax INT  NULL,
    prixkwatt int NOT NULL
);

CREATE TABLE compteur (
        id SERIAL PRIMARY KEY,
        numerocompteur VARCHAR(100) NOT NULL UNIQUE,
        tranche_id INT NOT NULL, 
        FOREIGN KEY (tranche_id) REFERENCES tranche(id),
         client_id int not null,
        FOREIGN KEY (client_id) REFERENCES client(id)





);
CREATE TABLE achat (
    id SERIAL PRIMARY KEY,
    reference VARCHAR(100) NOT NULL,
    coderecharge VARCHAR(100) NOT NULL,
    nbrekwatt VARCHAR(50) NOT NULL,
    dateheure TIMESTAMP NOT NULL,
    prixkwatt VARCHAR(50) NOT NULL,
      compteur_id int  not null  ,
    FOREIGN key (compteur_id) REFERENCES  compteur(id)
);

CREATE TYPE statut AS ENUM ('echec', 'reussite');

CREATE TABLE logging (
    id SERIAL PRIMARY KEY,
    dateheure TIMESTAMP NOT NULL,
    ipadresse VARCHAR(100) NOT NULL,
    localisation VARCHAR(100) NOT NULL,
    coderecharge VARCHAR(50) NOT NULL,
    nbrekwatt VARCHAR(50) NOT NULL
);
