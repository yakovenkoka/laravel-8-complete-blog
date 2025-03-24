## Laravel 8 Complete Blog

FilmWords is a place where all movie lovers gather. Here you can find movie reviews, the history of cinema, interesting or unexpected facts about movies, and much more. In addition, the blog has a special feature called "My Movie List", where you can keep track of all the movies you want to watch or have already watched. It is a very convenient place to store your personal movie collection, mark movies as watched, and add new movies to your list. It is a space where movie lovers can share their thoughts, information, and experiences with each other.

•	Author: Karina Yakovenko <br>

## Requirements
•	PHP 7.3 or higher <br>
•	Node 12.13.0 or higher <br>

## Usage <br>
Setting up your development environment on your local machine: <br>
```
git clone git@github.com:codewithdary/laravel-8-complete-blog.git
cd laravel-8-complete-blog
cp .env.example .env
composer install
php artisan key:generate
php artisan cache:clear && php artisan config:clear
php artisan serve
```
Setting up mailhog: <br>
```
brew install mailhog
```
Run Mailhog:<br>
```
mailhog
```
## Before starting <br>
Create a database <br>
```
mysql
create database laravelblog;
exit;
```

Setup your database credentials in the .env file <br>
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravelblog
DB_USERNAME={USERNAME}
DB_PASSWORD={PASSWORD}
```

Migrate the tables
```
php artisan migrate
```

## Contributing
Do not hesitate to contribute to the project by adapting or adding features ! Bug reports or pull requests are welcome.
