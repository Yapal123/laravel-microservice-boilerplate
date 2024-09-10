# shortcut to open terminal for console command
include .env
include /etc/os-release
export UBUNTU_CODENAME

rr:
	docker compose exec -it rr /bin/bash

build:
	@docker compose build --parallel

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
