install: # установить зависимости
	composer install

brain-games: # запуск игр
	./bin/brain-games

validate:
	composer validate
