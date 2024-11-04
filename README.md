## JB BLOG SYSTEM
>- Welcome to the JB Blog System! this is for evaluation task purposes only some features of this system are limited and some features is not yet implemented.
  
FEATURES ALREADY IMPLEMENTED AND TO BE EVALUATE:
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

## RUN PHP FILE FROM GITHUB
1. >- Install XAMPP
>- Clone Respositories by opening your terminal navigate to the directory where you want to clone the repository.
>- Use the following command (replace username and repository with the appropriate values):
>- git clone https://github.com/username/repository.git
>
2. >-  Move the PHP Files
   >-  After cloning, move the PHP files to the correct directory for your server.
   >-  For XAMPP, move the files to the htdocs folder:
   >-  On Windows: C:\xampp\htdocs
   >-  On macOS: /Applications/XAMPP/xamppfiles/htdocs
   >-  You can create a subfolder for your project, e.g., C:\xampp\htdocs\myproject.
   >
3. >- Start the local Server
 >- Make sure your local server (like XAMPP) is running. Open the control panel and start the Apache module.
> 
4. >- http://localhost/myproject/yourfile.php
 

## DATABASE CONFIGURATION
>- Download the user_management_db.sql
>- create a table inside phpmyadmin
>- run xampp and kindly go to http://localhost/phpmyadmin
>- import the SQL file 
>- after successful import go to the files and under JbWebApp folder Config>database.php  configure your database credentials
>- run new terminal
>- cd JbwebApp
>- php spark serve
>- and succcessfuly run the project or access localhost:8080

## 
