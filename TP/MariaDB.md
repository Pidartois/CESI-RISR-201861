 * Installer le package
 * Vérifier l'état du service
 * Se connecter au moteur mariadb
 * Créer une base de données "db1" (CREATE DATABASE db1)
 * Sélectionner la base "db1" (USE db1)
 * Ajouter une table "utilisateurs" dans la base :
 ```
  CREATE TABLE utilisateurs(
	    user_id INT NOT NULL AUTO_INCREMENT,
	    username VARCHAR(100) NOT NULL,
     PRIMARY KEY ( user_id )
   );
 ```
