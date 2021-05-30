## About We Fashion

**We fashion** is a clothing showcase website built with Laravel and MySQL.
It comes with an authentication module and a back-office to manage products displayed on the client side.

## 1) Clone project

Start your terminal, move to the directory of your choice, then run :
```shell
git clone https://github.com/nnsncl/we-fashion.git
```

## 2) Install Composer Dependencies

Go the the we-fashion directory, then, install composer dependencies.

```shell
cd we-fasion
```
```shell
composer install
```

## 3) Install NPM Dependencies

```shell
npm install
```

## 4) Create a copy of your .env file

make a copy of the ``.env.example`` file and create a ``.env`` file that we can start to fill out to do things like database configuration in the next steps.
```shell
cp .env.example .env
```

## 5) Generate an app encryption key

```shell
php artisan key:generate
```

## 6) Create an empty database for our application

Create an empty database for your project using a database tools such as MAMP, XAMP,..

## 7) In the .env file, add database information to allow Laravel to connect to the database

n the .env file fill in the following options to match the credentials of the database you just created:
- DB_HOST
- DB_PORT
- DB_DATABASE
- DB_USERNAME
- DB_PASSWORD

## 8) Migrate the database

Once your credentials are in the .env file, now you can migrate your database.
```shell
php artisan migrate
```

## 9) Seed the database

```shell
php artisan db:seed
```

## 10) Run the project on your local env

```shell
php artisan serve
```