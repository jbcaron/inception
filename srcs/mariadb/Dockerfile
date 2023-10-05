FROM alpine:3.18
LABEL maintainer="jcaron@student.42.fr"

RUN apk update \
	&& apk add --no-cache mariadb mariadb-client \
	&& mkdir -p /run/mysqld \
	&& chown -R mysql:mysql /run/mysqld \
	&& chmod 777 /run/mysqld

COPY conf/my.cnf /etc/my.cnf

RUN mysql_install_db

COPY tools/start.sh /start.sh

RUN chmod +x /start.sh

USER mysql

CMD [ "/start.sh" ]
