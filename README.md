## view composer

how to resuse the array/collection in every or specific blade, here is the example to dive in advace concept of laravel.

extending the view concept for reuse blade component or customise the component.

view composer is come in picture when reuse the collection/array in injecting to specific or any blade.

## Installation

cloning the project 

```bash
git clone https://github.com/nileshmailbook/ViewComposer.git
```

create .env with db credentials

run the migration

```bash
php artisan migrate
```

generate random data for view purpose

```bash
php artisan tinker

>>> factory('App\Channel',10)->create()
```

run the developement server

checkout result

http://localhost:8000/channel

http://localhost:8000/post/create

## usage

if you change your component dropdown to list or vice versa

need to change in blade files of post/create.blade.php and channel/index.blade.php

## integration

usage of view composer 
 
usage of custom service provider