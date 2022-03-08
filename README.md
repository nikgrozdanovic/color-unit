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
Finally, to start your local server run:
```
php artisan serve
```

The application is set up. To test the functionalities, create a couple of users and send invites to any of them.
