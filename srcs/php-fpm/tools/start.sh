#! /bin/sh

if [ -f /var/www/html/wp-config.php ]; then
	echo "WordPress is already installed"
else
	sleep 2

	wp config create --allow-root \
				--dbname=$MARIADB_DATABASE \
				--dbuser=$MARIADB_USER \
				--dbpass=$MARIADB_PASSWORD \
				--dbhost=mariadb:3306 \
				--path='/var/www/html/'

	wp core install --allow-root \
				--url="https://$SERVER_NAME" \
				--title=$SERVER_NAME \
				--admin_user=$WORDPRESS_ADMIN \
				--admin_password=$WORDPRESS_ADMIN_PASSWORD \
				--admin_email=$WORDPRESS_ADMIN_MAIL

	wp user create --allow-root $WORDPRESS_USER $WORDPRESS_USER_MAIL \
				--user_pass=$WORDPRESS_USER_PASSWORD
fi

# Start php-fpm
exec /usr/sbin/php-fpm81 -F