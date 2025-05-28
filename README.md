# KC report test
# Hello developer! Welcome to your new awesome Web application built with the Spiral framework.

# To set up the project, run the following commands:

## Install
view
---
composer install
---

# Now you can configure the Database. To do this, open the .env file and set up the database access credentials.
view 
---
# Database
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=cycle_test
DB_USERNAME=root
DB_PASSWORD=
---

# And run migrations:
view
---
php artisan migrate
---