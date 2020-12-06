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

- php artisan migrate (create table from migration file)
- php artisan migrate:reset (delete all table)
- php artisan migrate:rollback (delete latest table)
- php artisan migrate:refresh (depend migrations table)
- php artisan migrate:fresh (drop all table)
- php artisan tinker
- php artisan migrate:fresh --seed
- php artisan migrate:fresh
- php artisan db:seed


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

# HW

```
blog

one to many
many to many

user to post - one to many 
post to user - one to one
post to category - one to many (many to many)
category to post - one to many (many to many)
post to comment - one to many 
comment to post - one to one

users
    - id
    - name
    - email
    - password
    - date
posts
    - id 
    - title
    - body
    - user_id
category
    - id
    - name
category_post
    - id
    - post_id 
    - category_id 
    - date
comment
- id 
- user_id
- post_id
- body

```

- git, git reposistory, unix command line, markdown, version