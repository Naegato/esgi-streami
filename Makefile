.PHONY: up down update-db create-db drop-db migration entity fixtures logs install cmd

PHP_CONTAINER_NAME := php

-include .env
-include .env.local

up:
	docker compose up -d

down:
	docker compose down

update-db: create-db
	docker compose exec ${PHP_CONTAINER_NAME} bin/console doctrine:migrations:migrate --no-interaction

create-db:
	docker compose exec ${PHP_CONTAINER_NAME} bin/console doctrine:database:create --if-not-exists

drop-db:
	docker compose exec ${PHP_CONTAINER_NAME} bin/console doctrine:database:drop --force --if-exists

migration: create-db
	docker compose exec ${PHP_CONTAINER_NAME} bin/console make:migration

entity:
	docker compose exec -it ${PHP_CONTAINER_NAME} bin/console make:entity

fixtures: create-db
	docker compose exec ${PHP_CONTAINER_NAME} bin/console doctrine:fixtures:load --no-interaction

logs:
	docker compose logs -f

install:
	docker compose exec ${PHP_CONTAINER_NAME} composer install

cmd:
	docker compose exec -it ${PHP_CONTAINER_NAME} bash