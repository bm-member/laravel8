# Laravel8

## Installation

-   git clone https://github.com/bm-member/laravel8.git
-   cd laravel8
-   composer install
-   cp .env.example .env
-   setup database
-   php artisan migrate
-   php artisan key:generate
-   php artisan serve
-   run on localhost:8000
-   done

Migration

-   php artisan migrate (create table from migration file)
-   php artisan migrate:reset (delete all table)
-   php artisan migrate:rollback (delete latest table)
-   php artisan migrate:refresh (depend migrations table)
-   php artisan migrate:fresh (drop all table)
-   php artisan tinker

MVC

-   V - view
-   C - controller
-   M - Model (Buiness Logic, Data)

Table -> posts -> Migration file
-> id (auto increment)
-> title (varchar: 0, 255)(string)
-> body (text, mediumtext, longtext)(text)
-> created_at (timestamp)
-> updated_at (timestamp)

Model -> Post

DOS -> Window
Unix -> Mac, Linux(Ubunut, fedore)

http -> 80
https -> 443
mysql -> 3306

CRUD -> Create, Read, Update, Delete
Post Model
