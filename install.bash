#!/bin/bash

composer install
/opt/lampp/lampp start
php bin/console doctrine:database:create 
php bin/console make:migration 
php bin/console doctrine:migration:migrate 

