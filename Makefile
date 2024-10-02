.Phony: up down build

up: down
	docker compose up --pull always -d --wait

down:
	docker compose down

build:
	docker compose build --no-cache