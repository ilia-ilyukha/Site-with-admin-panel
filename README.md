1) composer install

2) Create file .env
Open your .env file and change the database name (DB_DATABASE) to whatever you have, 
username (DB_USERNAME) and password (DB_PASSWORD) field correspond to your configuration

3) php artisan key:generate

4) php artisan migrate

5) php artisan permission:create-role user // Creating role with name "user"

Used links:
https://spatie.be/ - package for user rules, permissons ext.

https://adminlte.io/ - free html-template for admin panel.

https://select2.org/