COMPOSE_FILE := ./srcs/docker-compose.yml

all: up

up: folder
	docker-compose -f ${COMPOSE_FILE} up -d

down:
	docker-compose -f ${COMPOSE_FILE} down

build:
	docker-compose -f ${COMPOSE_FILE} build

ps:
	docker-compose -f ${COMPOSE_FILE} ps

clean: down
	docker system prune -a

fclean: clean
	docker volume prune
	sudo rm -rf /home/${USER}/data/

re: fclean up

folder:
	mkdir -p /home/${USER}/data/wordpress
	mkdir -p /home/${USER}/data/mariadb

.PHONY: up down build ps clean folder