install: # установить зависимости
	composer install
	composer global require "squizlabs/php_codesniffer=*"
	composer require "wp-cli/php-cli-tools"

brain-games: # запуск игр
	./bin/brain-games

brain-even: #запуск игры на чёт/нечёт
	./bin/brain-even

validate:
	composer validate

lint: # запуск phpcs
	composer exec --verbose phpcs -- --standard=PSR12 src bin
