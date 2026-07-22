install: # установить зависимости
	composer install

brain-games: # запуск игр
	./bin/brain-games

validate:
	composer validate

lint: # запуск phpcs
	composer exec --verbose phpcs -- --standard=PSR12 src bin
