install: # установить зависимости
	composer install
	composer require "wp-cli/php-cli-tools"

brain-games: # запуск игр
	./bin/brain-games

brain-even: #запуск игры на чёт/нечёт
	./bin/brain-even

brain-calc: #запуск игры калькулятор
	./bin/brain-calc

brain-gcd: #запуск игры нод
	./bin/brain-gcd

brain-progression: #запуск игры арифмет.прогрессия
	./bin/brain-progression

validate:
	composer validate

lint: # запуск phpcs
	composer exec --verbose phpcs -- --standard=PSR12 src bin
