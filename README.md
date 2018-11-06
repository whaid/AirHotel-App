# AirHotel-App
*AirHotel est un projet réalisé dans le cadre des cours de gestion de projet à l'IPI, elle n'a pas pour but d'être pleinement fonctionnelle.*

L’objectif de l’application est de mettre à disposition des solutions d’hébergement pour les utilisateurs ayant pris l’avions. 

-----

## Installer l'application
### Pré-requis :
* [PHP] 7.2 ou plus
* Base de donnée MySQL / MariaDB

### Installation
1. Cloner le répertoire
2. Installer les dépendances :
    * Installer [composer] *(gestionnaire de dépendances)*:
        * Installation locale `php -r "readfile('https://getcomposer.org/installer');" | php`
        * [Installation globale]
    * Téléchargement des dépendances :
        * Composer est installé localement: `php composer.phar install`
        * Composer est installé gloabalement: `composer install`
3. Configurer le fichier `.env`
4. Création de la base de données :
    * Création de la base de données `php bin/console doctrine:database:create`
    * Création des tables `php bin/console doctrine:schema:update --force`
    
#### Commandes utiles :
* Chargement des données exemples/tests `php bin/console doctrine:fixtures:load`
* Lancer le serveur *(environnement de développement uniquement)* `php bin/console server:run`

[PHP]: http://php.net/downloads.php
[composer]: https://getcomposer.org/
[Installation globale]: https://getcomposer.org/download/
