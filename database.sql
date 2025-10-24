-- --------------------------------------------------------
-- Database for Users
-- --------------------------------------------------------
CREATE DATABASE IF NOT EXISTS utilisateurs;
USE utilisateurs;

-- Table for normal users
CREATE TABLE IF NOT EXISTS user(
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    login VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL
);

-- Table for admins
CREATE TABLE IF NOT EXISTS admin(
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    login VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL
);

-- --------------------------------------------------------
-- Database for Books
-- --------------------------------------------------------
CREATE DATABASE IF NOT EXISTS books;
USE books;

-- Table for books
CREATE TABLE IF NOT EXISTS livre(
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    titre VARCHAR(255) NOT NULL,
    auteur VARCHAR(255) NOT NULL,
    annee VARCHAR(255) NOT NULL,
    editeur VARCHAR(255) NOT NULL
);

-- Sample data
INSERT INTO livre (titre, auteur, annee, editeur)
VALUES 
('Da Vinci Code', 'Dan Brown', '2003', 'Jason Kaufman'),
('Le Petit Prince', 'Antoine de Saint-Exupéry', '1943', 'Gallimard'),
('1984', 'George Orwell', '1949', 'Secker & Warburg');
