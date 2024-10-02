.Phony: up down

up: down
	docker compose up --pull always -d --wait

down:
	docker compose down
