#!/usr/bin/env bash

set -e

echo "Configuring mail..."
ansible-playbook  /usr/local/bin/main.yml -i localhost, --connection=local
cp /host/config.inc.php /usr/share/postfixadmin/config.inc.php
echo "drop database if exists postfixadmin; create database if not exists postfixadmin" | mysql -hmysql -uroot -p"$DB_ROOT_PASSWORD"
mysql -hmysql -uroot -p"$DB_ROOT_PASSWORD" postfixadmin < /host/postfixadmin-seed.sql

# Create logging FIFO
mkfifo /dev/maillog

echo "Exec'ing $@"
exec "$@"
