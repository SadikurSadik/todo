# Todo Task Manager

Todo System application that allows users to add client and project and task for the project. User can  Register in the system to create his/her profile, After login in the system they can add and edit task for any project.

Guest user can see couple of static page.

> Todo is built using Laravel 5.2.* , Bootstrap 3.3.*

### Live Demo
[click here](http://sadik.xyz/todo)

### Version
master

### Installation

Clone this repository first-
```sh
$ git clone https://github.com/sadik-s/todo.git
```

Now cd into UMS-
```sh
$ cd todo
```

Install composer-
```sh
$ composer install  
```

Duplicate `.env.example` file to `.env` file to create a environment file-
```sh
$ cp .env.example .env
```

Edit `.env` file with with your database credential

Now create database tables and seed some data by running this command-
```
php artisan migrate --seed
```

Generate a application key
```
php artisan key:generate
```

## Run on server
```
php artisan serve
```