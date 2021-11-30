Test case project for aegyo.id
# Getting Started
## Installation
Clone this repository
```console
git clone git@github.com:thoraja/aegyo.id.git
```
Change directory
```console
cd aegyo.id
```
Install depedencies using composer
```console
composer install
```
Make .env file based on example
```console
cp .env.example .env
```
Configure the .env based on your environment. Then you need to generate application key
```console
php artisan key:generate
```
Run database migration, make sure you already set the database configuration on your .env file
```console
php artisan migrate
```
Now the app is ready to serve
```console
php artisan serve
```
## Seeding
This project provide dummy seeder located in `database/seeders/DummySeeder`. You can seed the database by call specific seeder class
```console
php artisan db:seed --class=DummySeeder
```
By performing this, the user is filled by a dummy user. You can login with the dummy credentials
> email: dummy@example.com
> password: password
