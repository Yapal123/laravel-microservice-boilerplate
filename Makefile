build:
	@docker compose build --parallel

composer-install:
	@docker compose run rr composer install

build-force:
	@docker compose build --parallel --no-cache

down:
	@docker compose down

stop:
	@docker compose stop

up:
	@docker compose up -d

status:
	@docker compose ps

recreate:
	@docker compose up -d --force-recreate
