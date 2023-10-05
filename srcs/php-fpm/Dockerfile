FROM alpine:3.18
LABEL maintainer="jcaron@student.42.fr"

RUN apk update \
	&& apk add --no-cache php php-cgi php-fpm php-pdo php-mysqli php-xml php-json php-curl php-phar php-session php-mbstring php-dom mariadb-client unzip
RUN adduser -D -H -G www-data www

WORKDIR /var/www/html

ADD https://fr.wordpress.org/latest-fr_FR.zip .

RUN unzip -qq latest-fr_FR.zip  \
	&& mv wordpress/* . \
	&& rm -rf latest-fr_FR.zip wordpress \
	&& chown -R www:www-data /var/www/html \
	&& apk del unzip

RUN wget https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar \
	&& chmod +x wp-cli.phar \
	&& mv wp-cli.phar /usr/local/bin/wp

#COPY conf/wp-config.php /var/www/html/wp-config.php

COPY conf/default.conf /etc/php81/php-fpm.d/www.conf

COPY tools/start.sh /start.sh
RUN chmod +x /start.sh

CMD [ "/start.sh" ]