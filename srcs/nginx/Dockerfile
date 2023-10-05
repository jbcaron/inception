FROM alpine:3.18
LABEL maintainer="jcaron@student.42.fr"

RUN apk update && \
	apk add --no-cache nginx openssl gettext curl

COPY tools/start.sh /start.sh
RUN chmod +x /start.sh

COPY conf/nginx.conf /etc/nginx/nginx.conf

CMD [ "/start.sh" ]

EXPOSE 443