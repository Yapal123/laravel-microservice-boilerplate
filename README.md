
## Сгенерировать proto-файл:
<code>protoc --plugin=protoc-gen-php-grpc --php_out=./Generated  --php-grpc_out=./Generated  proto/pinger.proto</code>

## Установить зависимости перед запуском докера:
<code>docker compose run rr composer install</code>
