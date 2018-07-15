# PHP JavaScript Developer Test

A simple test for PHP / JavaScript Developers

## Getting it running
PHP 7.x required. This is a Laravel 5.6 app.

1. Decide what localhost you're using. If you've got `mysql` and `php` already installed locally, you're good to go... but maybe look into [Valet](https://laravel.com/docs/5.6/valet). If you need a full VM solution, use [Homestead](https://laravel.com/docs/5.6/homestead).
1. do a `git clone` into a folder
1. `composer install` to install the apps's PHP dependencies
1. `npm install` to install Laravel's JS dependencies and front-end build chain
1. `npm run make-env`
1. Edit `.env` file, specifically `APP_URL` and `DB_*`
1. `php artisan migrate` to create database table.
1. `php artisan catch:import` to import or update customers.
1. `npm run development` to build front-end assets
1. `php artisan serve` if you just want a temporary localhost. You could use Valet or Homestead or configure your own localhost solution to point to the `/public` folder.
1. Visit http://127.0.0.1:8000 in your browser!
1. Call Brett back for an interview! 
<!--

## Instructions

1. Fork or clone this repo
2. Write a script to Import the CSV file located in `data/customers.csv` into a database (MySQL or Mongo is preferred)
3. Create a basic PHP web service that serves the data from the database as JSON
4. Create a basic web page that asynchronously loads the JSON into a list or table when you click a button
5. If you are completing this test as part of a job application please include a zip file of your project (including git config/metadata) with your application otherwise create a pull request and we'll take a look :)

### Guidelines

1. Your repo needs to include at minimum anything required to get the app working.  Detailed instructions should be provided in the `README.md` file to setup and run the app.
2. If a structured schema migration tool is not used then a setup script must be supplied to create any data tables etc
3. Try not spend more than 2 hours on it

### Bonus Points

* Make it Pretty
* Make it as OO as possible
* Consume dependencies with tools like Composer, Bower and NPM
* Use patterns like MVC, ORM
* Compile any front end assets with a build tool like gulp
* Unit tests

-->
