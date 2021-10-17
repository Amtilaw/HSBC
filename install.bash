#!/bin/bash

composer install
#service apache2 stop
php bin/console doctrine:database:create 
php bin/console make:migration 
php bin/console doctrine:migration:migrate 

