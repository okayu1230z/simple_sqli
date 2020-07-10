#!/bin/sh

rm ./logs/*.log
touch ./logs/mysql-error.log
touch ./logs/mysql-query.log
touch ./logs/mysql-slow.log
chmod 777 ./logs/mysql-error.log
chmod 777 ./logs/mysql-query.log
chmod 777 ./logs/mysql-slow.log
