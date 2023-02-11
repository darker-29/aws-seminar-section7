#!/bin/bash

set -xe

cd /var/www/
php artisan migrate --force
