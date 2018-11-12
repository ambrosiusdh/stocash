# stocash
Stocash

Link Prototype
https://www.figma.com/file/gp3Vn288WkD868PBJP3GGuF9/STOCASH?node-id=59%3A18

After clone/pull:
1. Go to the folder application using cd command on your cmd or terminal
2. Run composer install on your cmd or terminal
3. Copy .env.example file to .env on the root folder. You can type copy .env.example .env if using command prompt Windows or cp .env.example .env if using terminal, Ubuntu
4. Open your .env file and change the database name (DB_DATABASE) to whatever you have, username (DB_USERNAME) and password (DB_PASSWORD) field correspond to your configuration. 
5. By default, the username is root and you can leave the password field empty. (This is for Xampp) 
By default, the username is root and password is also root. (This is for Lamp)
6. Run php artisan key:generate
7. Run php artisan migrate
8. Run php artisan db:seed
9. Run php artisan serve
10. Go to localhost:8000

User role:
For login, see phpmyadmin for email and password.
1. Owner
-> Check transaction
-> Run cashier system
-> Edit stock inventory
-> See overall information
-> Check report sold item

2. Cashier
-> Run cashier system

