Procédure d'installation du super jeu de cartes
===================================================

Tout d'abord, clonez ce référentiel:

 ```sh
 $  git clone https://github.com/ibaegne/card-game.git
 ``` 

Ensuite, exécutez ces différentes commandes

 ```sh
 $ cd card-game
 ```
 ```sh
 $  composer install 
 ```
 ```sh
 $  docker-compose up -d --build
 ```
 ```sh
 $  docker exec -it php-fpm sh
 $  php bin/console d:d:c
 $  php bin/console d:m:m
 $  php bin/console doctrine:fixtures:load
 ```

 Vous avez terminé, vous pouvez visiter votre jeu sur l'URL suivante: `http://localhost:8082`
 et l'access à la base de donnée sur `http://localhost:8001`
 
 Serveur | Utilisateur | Mot de passe
 --- | --- | ---
 db | admin | admin
    
   
