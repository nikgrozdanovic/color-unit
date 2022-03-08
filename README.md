Run your XAMPP (or anything else that you use for a db host) and create database called friendsapp.
In your .env file adapt the following lines:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=colors
DB_USERNAME={your db username}
DB_PASSWORD={your db password}
```

After setting up your database, apply the migrations so you get all the neccessary tables in your database by running:
```
php artisan migrate
```

Also to get a color in db run seeder command:
```
php artisan db:seed --class=ColorsTableSeeder
```

Finally, to start your local server run:
```
php artisan serve
```
