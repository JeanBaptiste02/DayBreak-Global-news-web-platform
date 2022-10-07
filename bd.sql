/* Creation de la table compte */
DROP TABLE IF EXISTS compte;
CREATE TABLE compte(
  mail VARCHAR(255) NOT NULL PRIMARY KEY,
  pseudo VARCHAR(255) NOT NULL UNIQUE,
  pwd_hash VARCHAR(60) NOT NULL,
  is_subscribe BOOLEAN NOT NULL,
  is_actif_account BOOLEAN NOT NULL DEFAULT FALSE,
  code_restore_account CHAR(6) NULL,
  photo-profil BLOB NULL
  );
  
  /* Creation de la table news */

DROP TABLE IF EXISTS news;
CREATE TABLE news(
    id_news VARCHAR(255) NOT NULL PRIMARY KEY,
    name_article VARCHAR(255) NOT NULL,
    headline VARCHAR(60) NOT NULL,
    key_word CHAR(30) NOT NULL,
    important_persons VARCHAR(30) NOT NULL,
    auteur VARCHAR(30) NOT NULL,
    published TIMESTAMP NOT NULL,
    languag CHAR(2) NOT NULL,
    country CHAR(2) NOT NULnL,
    like INT NULL,
    url VARCHAR(255) NOT NULL,
    category VARCHAR(75) NOT NULL,
    source VARCHAR(100) NULL
);
  

