
## Introduction

This repository contains my moore task project built using the Laravel PHP framework. The guide below provides instructions on setting up, running, and using this project.

## Launch
To view the dashboard visit 

http://127.0.0.1:8000/dashboard/

## Requirements
PHP >= 7.3 (or check Laravel's version-specific requirements)
Composer
Database (e.g., MySQL, SQLite, PostgreSQL)

## Installation
Clone the repository:

git clone https://github.com/yourusername/laravel-project.git
cd laravel-project

Install dependencies:

composer install
Copy .env.example to .env:


cp .env.example .env

## Set your environment variables in the .env file. Be sure to set up your database credentials:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=mooretestdb
DB_USERNAME=root
DB_PASSWORD=

## Artisan commands 

php artisan key:generate
==> Run the migrations to create the necessary tables in your database:

php artisan migrate


==> Start the local development server:

php artisan serve
Visit http://localhost:8000 in your browser to access the application.

## Datatables ==> https://yajrabox.com/
composer require yajra/laravel-datatables-oracle
composer require yajra/laravel-datatables

==> Configuration
    This step is optional if you are using Laravel 5.5+

    Open the file config/app.php and then add following service provider.

    'providers' => [
        // ...
        Yajra\DataTables\DataTablesServiceProvider::class,
    ],
    After completing the step above, use the following command to publish configuration & assets:

php artisan vendor:publish --tag=datatables


## Contributing
Fork the repository.
Create a new branch for each feature or improvement.
Send a pull request from each feature branch to the develop branch.
## Support
If you encounter any issues or have questions, please open an issue or contact [Your Name/Email/Contact Information].

## License
This project is licensed under the MIT license.