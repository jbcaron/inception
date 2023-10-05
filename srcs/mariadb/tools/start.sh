#!/bin/sh

# create the database and the user for wordpress
echo "USE mysql;
FLUSH PRIVILEGES;
CREATE DATABASE IF NOT EXISTS ${MARIADB_DATABASE};
CREATE USER IF NOT EXISTS '${MARIADB_USER}'@'%' IDENTIFIED BY '${MARIADB_PASSWORD}';
GRANT ALL PRIVILEGES ON ${MARIADB_DATABASE}.* TO '${MARIADB_USER}'@'%';
FLUSH PRIVILEGES;" | /usr/bin/mysqld --bootstrap

exec /usr/bin/mysqld --console
