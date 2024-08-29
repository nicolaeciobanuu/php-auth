First you need to create a database with the **users** table.

    CREATE DATABASE php-auth

Then run the following statement:

    CREATE TABLE users (
        id INT AUTO_INCREMENT PRIMARY KEY,
        email VARCHAR(255) NOT NULL UNIQUE,
        password VARCHAR(255) NOT NULL
    );


Start the php app in the built-in web server:

    php -S localhost:3000

