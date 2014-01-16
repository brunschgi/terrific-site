#!/bin/sh

git pull
php app/console assets:install web --env=prod
php app/console assetic:dump web --env=prod --no-debug
php app/console cache:clear --env=prod --no-debug
