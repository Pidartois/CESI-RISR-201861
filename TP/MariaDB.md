# Ojectif #

Découvrir l'utilisation basique de MySQL/MariaDB (fork de MySQL en 2009)
 
 # TP #
 ## Partie 1 ##

 Sur la machine faisant office de serveur NFS (**infra.cesi**) :
 * Installer le package via internet ou DVD CentOS (*yum --disablerepo=\* --enablerepo=c7-media* <...>)
 * Vérifier l'état du service
 * Se connecter au moteur MariaDB
 * Créer une base de données "db1"
 * Sélectionner la base "db1"
 * Ajouter une table "utilisateurs" dans la base :
 ```
  CREATE TABLE utilisateurs(
	    user_id INT NOT NULL AUTO_INCREMENT,
	    username VARCHAR(100) NOT NULL,
     PRIMARY KEY ( user_id )
   );
 ```
 
  * Afficher le contenu de la table **utilisateurs**
  * Ajouter un utilisateur nommé *root* dans la table **utilisateurs**
  * A partir de l'invite de commande bash, trouver la commande qui permet de lister
  le contenu de la table "utilisateurs" (utiliser la commande *mysql* avec les bons arguments
 
 
  ## Partie 2 ##
 
  
  * Faire un paramètrage **sécurisé** de mariadb (il y a un binaire pour ça)
  * Créer un utilisateur *dba1* sur votre serveur
  * Créer un utilisateur *appli1* qui peut se connecter à MariaDB et réaliser toutes les opérations
  sur la base **db1** (CREATE USER, GRANT USAGE, GRANT ALL, FLUSH PRIVILEGES)
  * Se connecter à MariaDB avec l'utilisateur *appli1* et vérifiez votre identité (SELECT CURRENT_USER();
  * Afficher les droits des utilisateurs sur la base
  * Mettre en place le fichier de configuration permettant à l'utilisateur *appli1* de ne pas entrer de MDP lorsqu'il lance la commande mysql
  quand il lance la commande mysql (.my.cnf)
  
  
## Partie 3 ##
Sur votre serveur **web1.cesi**
  

* Ecrire un fichier */data/www/simple/users.html* avec le contenu suivant :
```
 <html>
  <head>
    <title> Liste des utilisateurs </title>
  </head>
  <body>
  root
  </body>
</html>
```
* Afficher *users.html* dans votre navigateur web
* Créer et autoriser les utilisateurs *web1* et *web2* à se connecter à distance sur votre serveur de BDD et à lire le contenu de la base *db1* (opération à réaliser sur le serveur **infra**)
* Ecrire un script bash *generation_users_html.sh* capable de générer le fichier "users.html" (echo, > ) 
* Compléter le script bash pour qu'il récupère tous les utilisateurs déclarés dans la table
   "utilisateurs" de notre Bdd (utiliser la commande "mysql ... utilisée précédemment)
  
 ## Partie 4 ##
 
* Installer les packgaes php (php php-common php-mysql)
* Créer un fichier phpinfo.php dans le même répertoire que users.html, mettre le contenu :
```
   <?php
	phpinfo();
   ?>
```
* Afficher la page phpinfo.php depuis votre navigateur
* Rédémarrer le service Apache pour prendre en compte le module pour php
* Afficher la page phpinfo.php depuis votre navigateur
* Récupérer le fichier bdd.php et le déposer dans le même dossier que users.html
* Editer le fichier bdd.php et remplacer les <XXX> par les bonnes valeurs
* Afficher la page dans votre navigateur
* Ajouter un utilisateur *sysadmin* dans la table *utilisateurs*
* Rafraîchir la page et s'assurer qu'il apparait
 
 
# Bonus #

* Créer un conteneur dédié à l'hébergement de la BDD avec hébergement des données de la base dans un répertoire spécifique
* En se basant sur les TP précédents, créer un script de backup pour générer un *dump* de la BDD toutes les nuits
 
