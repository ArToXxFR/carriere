# Carreer

Career is a simple project made with Laravel.
First application to discover Laravel.

## Usage

To install the project

```bash
git clone https://github.com/ArToXxFR/carriere
cd carriere/
```

To install all dependencies

`composer install`

Create the .env file and configure database

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=carriere
DB_USERNAME=
DB_PASSWORD=
```

Run the laravel migrations and seeders (choose create database)

`php artisan migrate --seed`

Create unique application key

`php artisan key:generate`

Everything is installed ! Start now the project

`php artisan serve`
