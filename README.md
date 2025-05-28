# KC report test
 Hello developer! Welcome to your new awesome Web application built with the Laravel framework.

 To set up the project, run the following commands:

## Install

View
```
composer install
```

Now you can configure the Database. To do this, open the .env file and set up the database access credentials.
## Database

View
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=cycle_test
DB_USERNAME=root
DB_PASSWORD=
```

## And run migrations:
View
```
php artisan migrate
```

## After the installation is complete, you can start the application using the following command:
View 
```
php artisan serve
```

## endpoint for each report
-Monthly Sales by Region http://127.0.0.1:8000/monthly-sales-by-region
-Top Categories by Store http://127.0.0.1:8000/top-categories-by-store

## dabatase script 
-db/cycle_test.sql