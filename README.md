## JB BLOG SYSTEM
>-Welcome to the JB Blog System! This README provides comprehensive
>-instructions for setting up and evaluating the features of the system,
>-built using CodeIgniter 4.

## Features
The JB Blog System includes several implemented features for user management, which are ready for evaluation:

>-User Authentication: Secure login verification allowing users to access their accounts.
>
>-Registration & Email Verification: Users can create accounts with email verification to ensure security.
>
>-Password Validation: Passwords must be between 8-20 characters and include letters, numbers, and symbols to enhance security.
>
>-User Logout: Users can securely log out of their accounts.
>
>-Profile Management: Users can view and edit their profiles.
>
>-Password Change: Functionality for users to update their passwords as needed.
>
>-Login Sessions: Users can review their login sessions for better account management.
>
>
## Installation Instructions
To set up the JB Blog System locally, follow these steps:

>-1. Install XAMPP
Ensure you have XAMPP installed on your system. XAMPP provides an easy-to-use Apache distribution containing MySQL, PHP, and Perl.
>


>-2. Clone the Repository
Open your terminal and navigate to the desired directory where you wish to clone the repository. Execute the following command (replace username with your GitHub username):

>-git clone https://github.com/Jbpalmera/jb-blog-site.git
>

>-3. Move the PHP Files
After cloning the repository, transfer the PHP files to the correct directory for your server:
For Windows: Move files to C:\xampp\htdocs\jb-blog-site.
For macOS: Move files to /Applications/XAMPP/xamppfiles/htdocs/jb-blog-site.
>
>-4. Start the Local Server
Open the XAMPP Control Panel and start the Apache module. This step is crucial for running PHP files on your local server.
>

>-5. Access the Application
To access the application, navigate to the following URL in your web browser:
>
http://localhost/jb-blog-site/public/index.php

>-6. Database Configuration
Download the Database SQL File: Obtain the user_management_db.sql file from the repository.
>

>-Create the Database:

>-Open your web browser and go to http://localhost/phpmyadmin.
>
>-Create a new database (e.g., jb_blog_db).
>
>-Import the SQL File:

>-Select the newly created database.
>-Click on the "Import" tab and upload the user_management_db.sql file.
>-Configure Database Credentials:

>-Navigate to jb-blog-site/Config/Database.php.
>-Update the database credentials with your newly created database
>-information.
>-7. Run the Project
>-Open a new terminal window and navigate to the project directory:



>-cd jb-blog-site
>-Then, run the following command to start the server:


>-php spark serve
>-After executing this command, your application should be accessible at:


>-http://localhost:8080
## Conclusion
>-With these instructions, you should have a fully functional JB Blog System up and running. This project not only provides foundational user management features but also serves as a robust framework for further development. As technology continues to evolve, feel free to explore and enhance the system further.

For any issues or further inquiries, please consult the project repository or reach out through GitHub. Happy coding!
