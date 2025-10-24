# Gestion de Livres

Une application PHP permettant de **gérer efficacement une bibliothèque**.  
Les utilisateurs peuvent ajouter, rechercher, visualiser, modifier et supprimer des livres, tandis que les administrateurs peuvent gérer les utilisateurs et approuver certaines actions.

---

## Cahier des Charges

### UX/UI

- **Page de connexion :** Authentification pour utilisateurs et administrateurs.  
- **Cadre principal des pages :** Interface intuitive et facile à naviguer pour gérer les livres et les utilisateurs.  

### Fonctionnalités

- **Connexion :** Accès sécurisé pour les utilisateurs et les administrateurs.  
- **Recherche :** Rechercher des livres par titre, auteur ou catégorie.  
- **Création :** Ajouter de nouveaux livres à la bibliothèque.  
- **Visualisation :** Consulter les détails des livres existants.  
- **Suppression :** Supprimer des livres du système.  
- **Mise à jour :** Modifier les informations des livres.  
- **Gestion des approbations et des utilisateurs :** Les administrateurs peuvent gérer les comptes utilisateurs et approuver certaines actions.  

### Base de Données

- **Utilisateurs :**  
    - User : Utilisateur standard  
    - Admin : Administrateur avec droits étendus  

- **Livres :**  
    - Livre : Informations sur les livres, incluant titre, auteur, catégorie, disponibilité, etc.  

---

## Installation

1. Cloner le projet :  
```bash
git clone https://github.com/votre-utilisateur/gestion-de-livre](https://github.com/dinhbachnguyen/Book-Storage.git
````

2. Importer la base de données dans votre serveur MySQL.

3. Configurer la connexion à la base de données dans le fichier `config.php`.

4. Lancer le serveur local (XAMPP, WAMP, MAMP) et accéder à l’application.




<!--
# Gestion de livres


# Notation

Pour commencer le projet, choisir le fichier "register.html" dans le "main" 
qui permet d'aller à la page de connexion principale.

--------------------------------------

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

--------------------------------------

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
-->


