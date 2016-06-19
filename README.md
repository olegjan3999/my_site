Installing:

1) git clone

2) composer install


Running

1) Create database (example:colorion)

2) Edit database configuration in /app/config/parameters.yml

3) php bin/console doctrine:schema:update --force 

(generate tables in database)

4) php bin/console server:run