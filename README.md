## Jb Blog Site
>- Welcome to the JB Blog System! this is for evaluation task purposes only some features of this system are limited and some features is not yet implemented.

FEATURES ALREADY IMPLEMENTED:
Login verification authentication:
Users can login with their details and be stored in the database

Registration & Authentication & Email Verification:
Users can register with their details and be stored in the database

Password Validation and Requirements:
My System has a Password validation like Password Must be 8-20 characters long and contain letters, numbers, and symbols.

Logout :
Users can logout and be stored in the database

Profile :
Users can view their profile

Profile Edit :
Users can edit their profile

Change Password :
Users can change their password

See Login Sessions :
Users can see their login sessions



## database Configuration
>- Download the user_management_db.sql
>- create a table inside phpmyadmin >- run xampp and kindly go to http://localhost/phpmyadmin
>- import the SQL file> 
>- after successful im>ort go to the files and under JbWebApp folder Config>database.php  configure your database credentials
>- run new termina>
>- cd JbwebAp>
>- php spark >erve
>- and succce>sfuly run the project or access localhost:8080

## Server Requirements

PHP version 8.1 or higher is required, with the following extensions installed:

- [intl](http://php.net/manual/en/intl.requirements.php)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)

> [!WARNING]
> - The end of life date for PHP 7.4 was November 28, 2022.
> - The end of life date for PHP 8.0 was November 26, 2023.
> - If you are still using PHP 7.4 or 8.0, you should upgrade immediately.
> - The end of life date for PHP 8.1 will be December 31, 2025.

Additionally, make sure that the following extensions are enabled in your PHP:

- json (enabled by default - don't turn it off)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php) if you plan to use MySQL
- [libcurl](http://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library
