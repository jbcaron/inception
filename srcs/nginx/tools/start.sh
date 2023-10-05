#! /bin/sh

# at each start generating ssl certificate valid 1 day for https
openssl req -x509 -nodes -days 1 -newkey rsa:2048 -keyout /etc/ssl/private/nginx.key -out /etc/ssl/certs/nginx.crt -subj "/C=FR/ST=France/L=Paris/O=42/OU=School/CN=${SERVER_NAME}"

# replace $SERVER_NAME by the value of the environment variable SERVER_NAME in nginx configuration file
sed -i "s/\$SERVER_NAME/$SERVER_NAME/g" /etc/nginx/http.d/default.conf > /etc/nginx/http.d/default.conf

# start nginx server
exec /usr/sbin/nginx -g "daemon off;"
