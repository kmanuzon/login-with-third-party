# Third Party Login
This repository demonstrates the integration of third party identity provider (Google) to this application using PHP and then persists data into MySQL/MariaDB database.

Frameworks and plugins used:
- Symfony 4 (Backend framework)
- KnpUOAuth2ClientBundle (Sign in with Google integration)
- Twig / Bootstrap 4 (Frontend framework)

See the live demo [here](https://3p-login-demo.progknife.tk) (NOTE your basic info i.e. email, name are saved in the demo database).

## Install

Prerequisites
- PHP 7.1.3 or greater
- Composer
- MySQL/MariaDB

Clone repository
```
git clone https://github.com/progknife/login-with-third-party.git
```
Go to directory
```
cd login-with-third-party
```
Install dependencies
```
composer install
```
Open .env file and replace/fill the values of
- *APP_GOOGLE_CLIENT_ID* to your Google Client ID
- *APP_GOOGLE_CLIENT_SECRET* to your Google Client Secret
- *DATABASE_URL* to the database connection URL, note that special characters might require escaping

See [Google Sign-In for Websites](https://developers.google.com/identity/sign-in/web/sign-in) documentation for Google Client credentials.

Create the database
```
php bin/console doctrine:database:create
```
Create the database schema
```
php bin/console doctrine:migrations:migrate
```
Run Symfony's web server
```
php bin/console server:run
```
Open browser and navigate to http://localhost:8000/

That's it!
