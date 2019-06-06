#!/bin/sh

basedir=$(dirname $0)

cd $basedir

exec php -S localhost:8000 -t $basedir webroot/index.php
