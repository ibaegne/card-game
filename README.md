Procédure d'installation de mon super jeux de carte
===================================================
# Etape 1 
 Lancer la commande: 
 ```sh
 $  composer install 
 ```
 
 # Etape 2
  Lancer la commande:
   ```sh
   $  docker-compose up -d --build
   ```

 # Etape 3
 Lancer les commandes:
 ```sh
 $  docker exec -it php-fpm sh
 $  php bin/console d:d:c
 $  php bin/console d:m:m
 $  php bin/console doctrine:fixtures:load
 ```

 # Etape 4
 Vous avez terminé, vous pouvez visiter votre jeux sur l'URL suivante: `http://localhost:8082`
 (et l'access à la base de donnée sur `http://localhost:8001`)
    
   
