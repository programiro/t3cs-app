#!/usr/bin/env bash
npm install && bower install && composer install && gulp build

if [ -n "$1" ];then
    if [ $1 = "--import-db" ];then
        echo 'start importing database...'
        mysql --silent -udev -pdev -hmysql typo3 < setup.sql
        echo 'import finished'
    else
        echo ''
        echo 'WRONG ARGUMENT!'
        echo ''
        echo '--import-db'
        echo 'Imports preconfigured TYPO3 Database (setup.sql)'
        echo ''
    fi
fi