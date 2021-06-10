# PROJET - GROUPE 8 

| Binôme  | Valeurs |
| ------------- |:-------------:|
| N°     | 08    |
| Membres      | Dinh Bach Nguyen     
               | Julien Billerot      
               | Pierre Bosc

Dernière question traitée : Gestion des approbations et des utilisateurs

# Notation

Pour commencer le projet, choisir le fichier "register.html" dans le "main" 
qui permet d'aller à la page de connexion principale.

----

# Cahier des charges

## Etat de réalisation

Tout-réalisé: 100%
Moitié-réalisé: 50%
Pas-réalisé: 0%

## UX/UI

- Page de connexion: 100%
- Cadre principal des pages: 100%

## Fonctionnaliés

- Connection: 100%
- Recherche: 100%
- Création: 100%
- Visualisation: 100%
- Suppression: 100%
- Mise à jour: 50% 
- Gestion des approbations et des utilisateurs: 0%

## Database

- Utilisateurs: 100%
    + User
    + Admin
- Books: 100%
    + Livre


# Database

## Script SQL PHPMyadmin:

CREATE DATABASE utilisateurs;
USE utilisateurs;

CREATE TABLE user(
id INT(11) AUTO_INCREMENT PRIMARY KEY,
login VARCHAR(255) NOT NULL,
password VARCHAR(255) NOT NULL);

CREATE TABLE admin(
id INT(11) AUTO_INCREMENT PRIMARY KEY,
login VARCHAR(255) NOT NULL,
password VARCHAR(255) NOT NULL);


CREATE DATABASE books;
USE books;

CREATE TABLE livre(
id INT(11) AUTO_INCREMENT PRIMARY KEY,
titre VARCHAR(255) NOT NULL,
auteur VARCHAR(255) NOT NULL,
annee VARCHAR(255) NOT NULL,
editeur VARCHAR(255) NOT NULL);

INSERT INTO livre (titre, auteur, annee, editeur)
VALUES ('Da Vinci Code','Dan Brown','2003','Jason Kaufman');

